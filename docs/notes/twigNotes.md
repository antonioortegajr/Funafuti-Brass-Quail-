##Twig Notes

###Slides

Slide
Create your own details page templates.

Create with twig. Last year we kicked around the idea of creating your own details page templates.
Not sure where that was going we set out to solve some the issues that allowing code to imported
bring. Security of course, quality, etc... And of course the ever present MLS compliance.

Starting today every developer partner can begin developing their own details page templates
using twig.

This pretty new and we are hoping you here can help us work out what is great about this and whatever
more needs to be done to bring this offering to all developer partners in way that will be a win
for everyone using the IDX Broker services.

Let's look at some requirements and things to remember.

This is for IDX Broker Partners ONLY. Clients will not be allowed to create templates.

Because we are not writing these templates, IDX Broker will not be supporting them.

Currently there is no way to restrict a client for getting your template should you offer
and removing the template if they leave your dev code.

Versioning is not supported at this time. Like I mentioned this is very new and this likely going to
prove something we need to re think and work out.

At this time it might be best to think of the templates as open source.

IDX Broker will not be involved in any disputes over templates.
If you are looking to not treat this as open source material that is fine.

However keep all I have said in mind if when when you release a template

Of course remember that this is super new. Things about this offering may change.

We are template creation to help give you more creative control of our system.

To create templates and experiences that will help clients see your unique offering.

The potential for this to become something more is there as well. Today we are starting with details pages

Next will be results pages. This could expand into a whole marketplace where clients can discover
your templates and purchase the IDX experience your offer. Differing SEO optimized options,
or even templates designed for a particular niche.

Any questions?

Let's code.


####code

Using twigs templating is pretty straight forward, but let's start with the basics.

In the example code you see we have some normal IDX values like address, price, etc...

In the IDX system these values would be filled in from our database using the listing ID for the db look up.

The php portions of the example code shown would be what IDX Broker runs on our servers.

Notice that one of the variables declared where this template came from. Attribution will be required and no temple will be used with out the IDX Broker attribution link that currently is on all IDX Broker details page templates.

This of course means that all disclaimers and courtesies are to be respected. Just like attribution, this is required.

On line 30 we get the templates. You will see there
are three already there. Named A, B, and C.

A and B are already filled in while C is left for you to explore.

On line 50 we can change the variable to the
template we want to load and click run after our changes. Change A to B and click Run to see the template change. Notice the lack of attribution...

Now add your own html, H1, divs, whatever you like and use the double curlys to add address, price etc..

Now you can also add inline style if you like.
Script tags are also fine to use.

Let's take a few minutes to play with this in the
console.

Now let's look at conditional statements.

We have now added a conditional statement. An if. This was added to template C and now we are showing an agent named Char.

If there is image data returned we will then add the html and value from our pretend db values to our template. This only happens if there is data available.

So comment out the variable that is providing the data and the image will disappear.

This is a_photo on line 27

Now you might think the image is gone simply because we are not passing the path to the image.

However you can inspect with your browser tools and see that the img tag was never added to the html.

This means there isn't a bunch of junk empty html if some data is not avaiable.

OK so we can exclude empty data, but it's more fun to handle these kind of exceptions.

twig supports if and else statements so lets add {% else %} and some text on the next line after
the <p><img src="{{photo}}"></p>

So now we should have {% else %} and under that Sorry, no photo available.

Now when we comment out the a_photo variable twig will give us the text we need to inform the
visitor that we don't have a photo for this agent and we are sorry about that...

So with twig we have a tool that allows to do much more than positioning. We have conditions.

Everything we have done so far is constructing the page. We can add elements to appear in differing
locations in the html source code. That is great, we don't need to CSS the heck out of a template
or use some combination of CSS and JS like we did earlier. This would mean less code to write and
maintain.

We even have things like loops and macros.

Now for macros.

Macros are comparable with functions in regular programming languages.
They are useful to reuse often used HTML fragments to not repeat yourself.

This is more like what you will be getting to work with from IDX Broker.

Documentation will be provided on what you can use in your templates as well as an example.

For now let's load up a sample macro of social links. We see that the previous templates
are still there. However template C now has a macro. The macro sets up an array of social network links
incase everyone wants to follow me on social networks. I am pretty interesting so keep that in mind.

The links and their data are set to "networks" for easy reference. After this is set we iterate through
adding each to an unordered list. Like in the last example have a condition here with the classname.

If a className is provided then we will apply this to the unordered list. Each item in the list
will get a class using the social network name.

So we are ready to use our macro with some html. A h1 is set and some tex, followed by the socialList()
and some arguments for this macro. We pass in the network array we set and a name for the class.

The macro writes the html we need for the unordered list. Macros like this are useful when you
can simply call a macro and get a whole snippet of html for your template.
