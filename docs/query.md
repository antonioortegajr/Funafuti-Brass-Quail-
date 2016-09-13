#API Queries

## Any and All disclaimers and courtesies must be used. No exceptions.
Some MLSs have dynamic data in the disclaimers and or courtesies.
Those that do not can be cached. Append ?disclaimer=y for these.


All queries to

 code https://api.idxbroker.com/clients/listing

will require the following in request headers:

* Valid client level key
* Valid partner level key
* "application/x-www-form-urlencoded" as Content-Type
* version 1.4.0

Required in endpoint:
* valid MLS ID in endpoint
* valid MLS listing ID in endpoint following


Example: 

 code http://api.idxbroker.com/clients/listing/a000/M1422715

The above should work with any DEMO account.

All queries to

 code https://api.idxbroker.com/clients/searchquery?lp=100000&hp=2000000&a000

will require the following in request headers:

* Valid client level key
* Valid partner level key
* "application/x-www-form-urlencoded" as Content-Type
* version 1.4.0

Required in endpoint:
* valid query string

Example: http://api.idxbroker.com/clients/searchquery?lp=100000&hp=200000

This does not currently work with DEMO accounts.
