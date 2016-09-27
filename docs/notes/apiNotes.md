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
