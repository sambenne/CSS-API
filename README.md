CSS-API
=======

This will parse the CSS and tell you what versions of IE support it.

###Changelog###

22/04/2012
 - Updated the rules, still have the units and values to do and there is still a selecotr to do.
 - I have cleaned up the code a little.

###So Far###

I have created a class that is dealing with the CSS. It currently cleans up the CSS and in seperate functions it does what it needs to get the 4 different parts that it needs to work out the selectors, properties etc.

So far it can get pretty much all the selectors bar one or two due to me not having done the regex yet, it then searches through the CSS building an array of what it finds. I have also started it getting the properties however, there is a lot of regex as there is a lot of properties. I will then get the values and units sorted afterwards.

Once I have it working out which features are used I will be able to work out if the browsers support them and be able to build a report on it. I will also make it so that you can easily add your CSS to the page by three ways file upload, URL and Direct Input.

I am hoping that I will be able to create an API so that users can just send an URL and get the data with JavaScript.

###Demo###

You can check out the demo site I have created. I will keep it updated as I update the Class. When I have it working I will then set up a proper site for it so that people can use the API not only just on my site but outside as well.

[http://sam-benne.co.uk/playground/css-api/](My Website)