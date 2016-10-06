<style>
.rating {
	float: left;
	width: 80px;
	height: 15px;
	background: url({$GLOBALS.site_url}/system/lib/rating/n_stars_2.gif) repeat-x;
}
.rating_over {
	float: left;
	width: 0px;
	height: 15px;
	background: url({$GLOBALS.site_url}/system/lib/rating/n_stars_1.gif) repeat-x;
}
.rating_text {
	float: left;
	padding-left: 5px;
}
</style>

&nbsp;&nbsp;
<div class="rating" id="rating" title="{if $listing.rating_array.title eq 1}[[Please, Vote!]]{elseif $listing.rating_array.title eq 2}[[You've already voted]]{elseif $listing.rating_array.title eq 3}[[Please sign in to vote]]{/if}">
	<div class="rating_over" id="rating_over"></div>
</div>
<div class="rating_text">(<span id="rating_rate">{$listing.rating_array.rating|round}</span> of 5)</div>

<script type="text/javascript">
	rating({
		defaultRate: {$listing.rating_array.rating|round},
		listingID: {$listing.id},
		votePhrase: "[[You've already voted]]",
		scriptURL: "{$GLOBALS.site_url}/ajax/",
		active: "{$listing.rating_array.title}" == 1 ? 1 : 0,
		ratingElement: "#rating",
		rateElement: "#rating_rate"
	});
</script>