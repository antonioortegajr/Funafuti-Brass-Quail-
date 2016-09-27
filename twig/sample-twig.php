{# Actionable items we want the user to take go in the hotLinks section. #}
<div id="IDX-hotLinks">

    {# Let's get that lead, create the link for saving a property.  #}
    {{ idx.saveProperty }}
    
    {# Using the moreInfoLink URL passed into twig, we can make a link to the more info page. #}
    <a href="{{ moreInfoLink }}" id="IDX-moreInfo">More Information</a>
    
    {# Use the IDX macros to build the link to the mortgage calculator page. #}
    {{ idx.displayMortgageCalcLink }}

    {# Link to the printable flyer page. #}
    <a target="_blank" href="?printable" id="IDX-printable">Printable Flyer</a>
    
    {# 
     # If the account is an office and we got the featured agent info, 
     # make the link to the contact URL specific to that agent. Otherwise,
     # just link to the more info page.
     #}
    {% if featuredAgentInfo %}
        {% set contactURL = "/idx/contact?agentID=" ~ featuredAgentInfo.userID %}
    {% else %}
        {% set contactURL = moreInfoLink %}
    {% endif %}
    
    <a href="{{ contactURL }}" id="IDX-contactAgent">Contact Agent</a>
    
    {# 
     # Clients can enter custom URLs and Text for properties on the listing edit page,
     # let's display their custom URL here.
     #}
    {% if customLink.url and customLink.text %}
        <a class="IDX-CustomLink" href="{{ customLink.url }}" target="_blank">{{ customLink.text }}</a>
    {% endif %}
</div>

{#
 # New section for the main information, photo, address price, etc.
 #}
<div id="IDX-detailsHead">
    <div id="IDX-photoListing">
        {#
         # Using the IDX macro for photos will ensure you're in compliance with MLSs rules
         # as some MLS's require a courtesy to be displayed with the primary photo. If you
         # don't use the IDX photo macro, you MUST at least wrap the primary photo in a 
         # <div> with the ID of "IDX-primaryPhoto".
         #
         # Possible photo options could be:
         # idx.photo('single')
         # idx.photo('gallery')
         # idx.photo('three')
         #
         # This by-passes the photo macro to call the photo single macro specifically because this
         # wants to display the idx.photoGalleryLink on its own (hence the false option passed in).
         #}
        {{ idx.photoSingle(false) }}
        {{ idx.photoGalleryLink }}
    </div>
    {# Use the IDX macros to display the address #}
    {{ idx.address }}

    {# Use the IDX macros to display the price, this figures out the label for sold, rentals, etc. #}
    {{ idx.price({labelAfter:true}) }}

    {# BankRate is a good idea to have on pages. #}
    {{ idx.bankRateTool(displayBankRateEstPayment, mortgagePayment) }}
    
    {# Using a the IDX fieldNew macro, we can display any number of fields. #}
    <div id="IDX-detailsHeadFields">
        {{ idx.fieldNew('bedrooms', {labelAfter:true}) }}
        {{ idx.fieldNew('fullBaths', {labelAfter:true}) }}
        {{ idx.fieldNew('totalBaths', {labelAfter:true}) }}
        {{ idx.fieldNew('partialBaths', {labelAfter:true}) }}
        {{ idx.fieldNew('sqFt', {labelAfter:true}) }}
        {{ idx.fieldNew('acres', {labelAfter:true}) }}
        {{ idx.fieldNew('listingID', {labelAfter:true}) }}
    </div>
</div>
{{ idx.lineBreak("detailsHead") }}

{#
 # There is a idx.openHouse macro to do this, but we want a custom one. Let's 
 # use the open house media data to create our own open house HTML.
 #}
{% if mediaData.ohCount > 0 %}
<div id="IDX-openHouses">
    <h3 id="IDX-openHouseHeader">Upcoming Open House{% if mediaData.ohCount > 1 %}s{% endif %}</h3>
    {% for oh in mediaData.oh %}
        <div class="IDX-openHouseWrapper">
            <h4 class="IDX-ohFreeFormDate">{{ oh.freeFormDate }}</h4>
            <div class="IDX-openHouse">
                <div class="IDX-openHouseTime"><span class="IDX-ohWhen">Time: </span><span class="IDX-ohFreeFormTime">{{ oh.freeFormTime }}</span></div>
                {% if oh.text %}<div class="IDX-ohText">{{ oh.text }}</div>{% endif %}
                {% if oh.descriptor %}<div class="IDX-ohDescriptor">{{ oh.descriptor }}</div>{% endif %}
                {% if oh.ohLink %}<a href="{{ oh.ohLink }}" class="IDX-ohLink">More Info</a>{% endif %}
            </div>
        </div>
    {% endfor %}
    <a id="IDX-ohMoreInfo" href="{{ moreInfoLink }}">Request More Info</a>
</div>
{% endif %}


<div id="IDX-description">

    {# Add the remarks to the property, the macro will create generic text if no remarks exist. #}
    {{ idx.remarks }}
</div>

<div id="IDX-detailsFeatured">
    
    {#
     # Scheduling a showing should only happen for active properties. Using the idxStatus variable
     # which will be either 'active' or 'sold' we can accomplish this pretty easily.
     #}
    {% if idxStatus == 'active' %}
    <a id="IDX-scheduleShowing" href="{{ scheduleShowingLink }}" class="IDX-button">Schedule Showing</a>
    {% endif %}
    
    {# Show the links to the virtual tours, yes tours, some listing may have more than one. #}
    {{ idx.virtualTour }}
    
    {# 
     # Let's highlight some specific fields that are popular. These are core fields, 
     # but there's no reason you couldn't make a template for a specific MLS's advanced fields
     # like schools and what not.
     #}
    <div id="IDX-contentFields">

        {% set contentFields = {
            "core": [
                "propStatus",
                "countyName",
                "yearBuilt",
                "propType",
                "propSubType"
            ],
            "other": [
                "area",
                "nonExistantField" 
            ]
        } 
        %}
        
        {# Loop through the content fields and make sections of the core and other fields. #}
        {% for divID, fields in contentFields %}
            <div id="IDX-contentFields-{{ divID }}" class="IDX-contentFields">
            {% for field in fields %}
                {{ idx.fieldNew(field) }}
            {% endfor %}
            </div>
        {% endfor %}
    </div>
</div>
