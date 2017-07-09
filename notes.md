#TODO #
EXPORT WP DATABASE AND INSTALL LOCALLY
-add function to add default TAXS
-add function to mod meta boxes based on taxonomy
-add css per tax 

* make a custom post type: portfolio_post
	- portfolio_post should have a custom taxonomy associated with it.
	- the default fields for a portfolio_post:
		* Title
		* Date
		* Client
		* Description: max 200 Words
		* featured image
		* Links
* Custom taxonomy for portfolio_post should be:
	- Text
	- Image
	- Gallery
	- Project

* Write functions/scripts to add meta_boxes for each taxonomy:
	* Text portfolio_post
		- add a content box
	* image portfolio_post
		- NA
	* Gallery portfolio_post
		- add gallery generator that loads images into featured img's div
	* Project portfolio_post
		- add three content fields:
			- problem
			- process
			- solution

* changes for Skills page:
	top level chart with bars for skill group
	click on skill group to display level for individual skills within skill group.

	design

	web

	dev
