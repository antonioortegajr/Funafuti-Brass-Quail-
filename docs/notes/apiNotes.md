#API Calls 101

The IDX Broker API has grown up quite a bit. It powers our WP plugin,
our facebook application, CRMs, and even mobile applications. Last year
I was encouraging everyone to explore and use the API. One response I have
not forgotten was "That is great, but show me how to use it on a basic level first."

This where we are beginning today.

Today we are doing API 101. making a featured listings call and creating a
simple featured page. All in PHP.  We touched on some PHP with twig already.
This will be just PHP you would run on your sever. Or today in this console.

Our API calls will use a php function call cURL. This will get the contents of
an endpoint. cURL has a lot of options that can go with it. We are just going to
fetch some JSON. Then use the php function json_decde() to begin working with
the return.

What is JSON? The API call is easy. IDX Broker gives you the code for this API call.
On my GitHub I have examples of a API calls in .NET, Python, Ruby, even verbose script!

All of these return JSON and working with this kind of return is the most important part.

JSON is JavaScript Object Notation. All the means a a JS style syntax. And that is
key and value pairs. The first example we see a simple object. It starts with a curly brace
then the key in quotes. A colon separates the value also in quotes. Ending in a closing curly.

The Key is the label. The value is the actual data. Another example would be like a key of price
and a value of 100,000.

These can also be nested. Objects in objects. Ok No questions right?

JK.

This seems hard to work with at first. Functions like json_decode() will help.

As you will see.

First lets, import the default menu code.

Let's choose the API workshop.

Here is example code on a php call. We see the opening PHP tag. This is required in PHP.
Then a comment. I mentioned comments before. They are good. For future you especially.

Next we see the API endpoint set to a variable named $URL. This is a url string.

After that the method.
This method describes what we are trying to do with this call. Most REST APIs have
CRUD methods. CRUD stands for Create, Read, Update, and Delete. In this case we
are only reading data. So we are going to GET. IDX uses PUT, POST, and DELETE to
 create, update, delete data via the API. Not all CRUD functionality is available
on every API call. SO check the docs before assuming you can do something via API.

Next up we are looking at headers. These are also stored in a variable. Named $headers.
This isn't a string like the endpoint. This is an array separated by commas.

We have a few required ones. These have comments to let you know. Content-Type will always be
application/x-www-form-urlencoded. With application/x-www-form-urlencoded, the body of the HTTP message sent to the server is essentially one giant query string -- name/value pairs are separated by the ampersand (&), and names are separated from values by the equals symbol (=). Much like forms in IDX Broker.

Next is the accesskey. Also required. This is an API key from an active account.
In this call we are asking for JSON. Because boo XML.

Also we are asking for a specific version of the API.

These last two are not required and will default to settings in middleware if not declared here.

Next up we have cURL and options for cURL. We pass the URL endpoint and headers to cURL.

I am not going to much in to the cURL options as there are many. We can talk more about that
after this talk.

cURL is executed with the headers and all, and set to a variable named $response.

To get the http response code we set a cURL get info function to a variable.

http response codes are great. They tell us how the API call went with jsut a number

200 is all good OK. This is true for status codes in the 200's 400's means something was wrong
with your request. This could be a bad url endpoint or a bad key. most common is bad request or
too many API calls that hour.

500's means an error server side. You get one of these just email developers@idxbroker.com

Evaluation of these codes can instruct your script to handle the situation.

For example if you get a 500 or higher you might set a notification to yourself.

When 200 all is normally good.

So when that happens we are going to use josn_decode() to start working with JSON.

After this we are simply dumping our the response variable.

That is nuts and bolts of this simple PHP script.
