#Notes for JS slides



#Notes for JS lesson

##First

Here we have a details page. This is a normal plain details page from IDX Broker. Nothing really special about it.
If you scroll to the bottom you will se an comment note saying IDX javascript. This is good as these comments
help troubleshoot JS issues and make code more readable to humans. If you scroll up to about the 750 line you
will see javascript already being applied and contain comments. Since it's possible scripting you apply
to IDX pages living beyond your relationship to the client comments will help others understand what you code does.

Also future you might not remember. Today me has often been angry with yesterAntonio's lack of comments.

Comments don't really hurt anything. Scroll back down and add a script tag with a comment.
After the opening script add slash slash and whatever text you like and run.

If you already know how to make comments and use javascript feel free to use the tweet button
in the console to troll me on twitter.

Well that was fun.

Keep commenting in mind and your support and IDX support will thank you.
Let's load up the next section and add some real javascript.

##Second

We see that the html comment has changed to My Javascript and in my script tag I have comments.
I have declared some variables.
inside the script tag var the variable name equals the html from a specific div element. Specified by ID.

We are using document to declare we are working in the DOM a period to bind this to the next function
getElementBy() where we specify what element we are targeting. Binding to innerHTML states we want the contents of that div
not the div itself.

So moving forward newDiv represents the inner html of the div element IDX-Details-Row.
