charAt##Twig Notes

Using twigs templating is pretty straight forward
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

However you can inspect with your browser tools and see that the img tag was never used.

This means there isn't a bunch of junk empty html if some data is not provided.

OK so we can exclude empty data, but it's more fun to handle these kind of exceptions.

twig support if and else statements so lets add {% else %} and some text on the next line after
the <p><img src="{{photo}}"></p>

So now we should have {% else %} and under that Sorry, no photo available.

Now when we comment out the a_photo variable twig will give us the text we need to inform the
visitor that we don't have a photo for this agent and we are sorry about that...

So with twig we have a tool that allows to do much more than positioning. We have conditions.

We even have things like loops and macros.

Everything we have done so far is constructing the page. We can add elements to appear in differing
locations in the html source code. That is great, we don't need to CSS the heck out of a template
or use some combination of CSS and JS like we did earlier. This would mean less code to write and
maintain.

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
