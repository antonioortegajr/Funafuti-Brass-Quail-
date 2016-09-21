##Twig Notes

Using twigs templating is pretty straight forward
In the example code you see we have some normal IDX values like address, price, etc...

In the IDX system these values would be filled in from our database using the listing ID for the db look up.

The php portions of the example code shown would be what IDX Broker runs on our servers.

Notice that one of the variables declared where this template came from. Attribution will be required and no temple will be used with out the IDX Broker attribution link that currently is on all IDX Broker details page templates.

This of course means that all disclaimers and courtesies are to be respected. Just like attribution this is required.

On line 30 we get the templates. You will see there
are three already there. Named A, B, and C.

A and B are already filled in while C is left for you to explore.

On line 50 we can change the variable to the
template we want to load and click run after our changes. Change A to B and click Run to see the template change. Notice the lack of attribution...

Now add your own html, H1, divs, whatever you like and use the double curlys to add address, price etc..

Now you can also add inline style if you like.
Script tags are also fine to use.

Let's take a minute to play with this in the
console.

Now let's look at conditional statements.
