{if $listing.type.id == "Job"}
	{include file="job_details.tpl" listing=$listing }
{elseif $listing.type.id == "Resume"}
	{include file="resume_details.tpl" listing=$listing }
{/if}