# Health_App_php

https://evening-dusk-65255.herokuapp.com/

This is an app designed for mobile applications using a LAMP stack:
Laravel-artisan-mySQL-PHP

The purpose is to simplify the process of managing a long-term illness by keeping critical information in one place.

Currently, the app can help with:

-tracking trends in blood glucose levels (by a list and by a graph)

-tracking prescriptions, so that they are all listed in one place, and to see when a new order needs to be placed.

-list critical phone numbers when help is needed.

Still to do:
-fix error that stops app from working upon login (heroku deploy is successfull, but login connection is not)

-fix the way prescription count is calculated.. (for now, use 'created_at' date rather than 'updated_at' date, and leave all else the same.  The 'rem' (amount remaining) is continually added to as it stands now).

-remove all tables and migrate them using php for best results

-get contact information to be dynamic.

Longer term:

-create buttons in 'contacts' that will call the selected number
-create links to the pharmacy that will renew presecriptions with a click
