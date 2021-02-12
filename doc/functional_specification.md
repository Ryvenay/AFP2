# 1. Current State 

# 2. Scope

The goal of this project is to create a fully functional web shop, where members can buy some musical equipment or something else. Aside from the main function, this page has to have a user management system, which include registering new users, logging them in and out, changing password and profile details.The project contains the ordinary website elements like, registration, login system, shoping cart, laravel and database, etc. We will use for this project laravel framework.

# 3. Standards & Laws

## General Standards:
## Browser requirements:
Web application must function and display properly in the following browser versions:

- Mozilla Firefox
- Microsoft Edge
- Google Chrome
- Internet Explorer

## Privacy and Cookie Policy

Obligation to EU privacy laws, it is our responsibility to inform users about how we handle their personal data. For this reason we will provide a Privacy Policy and a Cookie Policy for users to read. In the functional specification it will be explained in details.

# 4. Current business model

# 5. Requested Business model

# 6. Request List
| Modul | ID | Name | V | Description |
|--------|---------|-----------|-----------|-------------|
|Database|D1|Name|0.1|Database, tables, relations|
|Authorization|A1|Log-in|0.1|User can log-in to their account|
|Authorization|A2|Register|0.1|User can register a new account|
|Authorization|A3|Log-out|0.1|User can log out from their account|
|Authorization|A4|Change pw|0.1|User can change their password|
|Pages|P1|Home page|0.1| Users automatically navigated to the home page|
|Pages|P2|Categories|0.1|Users can choose what are they searching for (headset or headphone)|
|Pages|P3|Product page|0.1|Users can view one item's description, value etc.|
|Pages|P4|Shopping cart|0.1|Contain the items the user has put in the cart|
|Pages|P5|Order page|0.1|Certain users can delete posts|
|Profile & Pages|PRP1|Profile page|0.1|Users can view profiles|
|Profile|PR1|Edit profile|0.1|User can edit their profile|
# 7. Use-Cases:

## User:
- Able to register a new account
- Able to log in to their account
- Able to log out to their account
- Able to see the home page
- Able to see the product listings by category
- Can filter through the products
- Can open a product and see it's detailed description page
- Able to add products to their cart
- Able to finish the order

## Manager:
   * Has all the user privileges
   * Able to add a new product
   * Can modify an existing product
   * Able to remove a product
   * Has access to and able to see all the orders from other users
