<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Contains the Translation2_Admin_Container_dataobjectsimple class
 *
 * PHP versions 4 and 5
 *
 * LICENSE: Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products
 *    derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR "AS IS" AND ANY EXPRESS OR IMPLIED
 * WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE FREEBSD PROJECT OR CONTRIBUTORS BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
 * THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category  Internationalization
 * @package   Translation2
 * @author    Alan Knowles <alan@akbkhome.com>
 * @copyright 2004-2007 Alan Knowles
 * @license   http://www.debian.org/misc/bsd.license  BSD License (3 Clause)
 * @version   CVS: $Id: dataobjectsimple.php 7171 2013-01-17 09:18:37Z spodche $
 * @link      http://pear.php.net/package/Translation2
 */

/**
 * require Translation2_Container_dataobjectsimple class
 */
require_once 'Translation2/Container/dataobjectsimple.php';

/**
 * Storage driver for storing/fetching data to/from a database
 *
 * This storage driver can use all databases which are supported
 * by PEAR::DB_DataObject to fetch data.
 *
 * Database Structure:
 *
 * <pre>
 * // meta data etc. not supported
 *
 * table: translations
 *  id          // not null primary key autoincrement..
 *  string_id   // translation id
 *  page        // indexed varchar eg. (mytemplate.html)
 *  lang        // index varchar (eg. en|fr|.....)
 *  translation // the translated value in language lang.
 * </pre>
 *
 * @category  Internationalization
 * @package   Translation2
 * @author    Alan Knowles <alan@akbkhome.com>
 * @copyright 2004-2007 Alan Knowles
 * @license   http://www.debian.org/misc/bsd.license  BSD License (3 Clause)
 * @link      http://pear.php.net/package/Translation2
 */
class Translation2_Admin_Container_dataobjectsimple extends Translation2_Container_dataobjectsimple
{
    // {{{ addLang()

    /**
     * Creates a new table to store the strings in this language.
     * If the table is shared with other langs, it is ALTERed to
     * hold strings in this lang too.
     *
     * @param array $langData array('lang_id'    => 'en',
     *                              'table_name' => 'i18n',
     *                              'name'       => 'english',
     *                              'meta'       => 'some meta info',
     *                              'error_text' => 'not available');
     * @param array $options  DB_DataObject options
     *
     * @return true|PEAR_Error
     */
    function addLang($langData, $options = array())
    {
        $do = DB_DataObject::factory($this->options['table']);
        $do->lang = $langData['lang_id'];
        if (!$do->find()) {
            $do->insert();
        }
    }
    
    // }}}
    // {{{ addLangToList()

    /**
     * Creates a new entry in the langsAvail table.
     * If the table doesn't exist yet, it is created.
     *
     * @param array $langData array('lang_id'    => 'en',
     *                              'table_name' => 'i18n',
     *                              'name'       => 'english',
     *                              'meta'       => 'some meta info',
     *                              'error_text' => 'not available');
     *
     * @return true|PEAR_Error
     */
    function addLangToList($langData)
    {
        return true;
    }

    // }}}
    // {{{ add()

    /**
     * Add a new entry in the strings table.
     *
     * @param string $string      string
     * @param string $pageID      page/group ID
     * @param array  $stringArray Associative array with string translations.
     *               Sample format:  array('en' => 'sample', 'it' => 'esempio')
     *
     * @return true|PEAR_Error
     */
    function add($string, $pageID, $stringArray)
    {
        //look up the string id first..
        $do = DB_DataObject::factory($this->options['table']);
        $do->lang = '-';
        $do->translation = $string;
        $do->page = $page;
        if ($do->find(true)) {
            $stringID = $do->string_id;
        } else {
            // insert it and use the 'id' as the string id
            $stringID = $do->insert();
            $do->string_id = $stringID;
            $do->update();
        }

        foreach ($stringArray as $lang=>$value) {
            $do = DB_DataObject::factory($this->options['table']);
            $do->string_id = $stringID;
            $do->page      = $pageID;
            $do->lang      = $lang;
            if ($do->find(true)) {
                $do->translation = $value;
                $do->update();
                continue;
            }
            $do->translation = $value;
            $do->insert();
        }

        return true;
    }

    // }}}
    // {{{ update()

    /**
     * Update an existing entry in the strings table.
     *
     * @param string $stringID    string ID
     * @param string $pageID      page/group ID
     * @param array  $stringArray Associative array with string translations.
     *               Sample format: array('en' => 'sample', 'it' => 'esempio')
     *
     * @return true|PEAR_Error
     */
    function update($stringID, $pageID, $stringArray)
    {
        $this->add($stringID, $pageID, $stringArray);
        return true;
    }

    // }}}
    // {{{ remove()

    /**
     * Remove an entry from the strings table.
     *
     * @param string $stringID string ID
     * @param string $pageID   page/group ID
     *
     * @return true|PEAR_Error
     */
    function remove($stringID, $pageID)
    {
        // get the string id
        $do = DB_DataObject::factory($this->options['table']);
        $do->page = $pageID;
        $do->translation = $stringID;
        // we don't have the base language translation..
        if (!$do->find()) {
            return '';
        }

        while ($do->fetch()) {
            $do2 = DB_DataObject::factory($this->options['table']);
            $do2->get($do->id);
            $do2->delete();
        }
        return true;
    }

    // }}}
    // {{{ removePage()

    /**
     * Remove all the strings in the given page/group
     *
     * @param string $pageID page/group ID
     *
     * @return mixed true on success, PEAR_Error on failure
     */
    function removePage($pageID = null)
    {
        $do = DB_DataObject::factory($this->options['table']);
        $do->page = $pageID;
        // we don't have the base language translation..
        if (!$do->find()) {
            return '';
        }

        while ($do->fetch()) {
            $do2 = DB_DataObject::factory($this->options['table']);
            $do2->get($do->id);
            $do2->delete();
        }
        return true;
    }

    // }}}
}
?>