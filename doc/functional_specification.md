# 1. Current State 

Our team is a small web developer company that aims to develop modern and quality web platforms for our clients. The team consists of 3 members and two senior supervisor.
We've been commissioned by the owner of a relatively new electrical store, to create an e-commerce website that he can use in his business, so he can reach more people. The business is selling electrical appliances, like computers, televisions, home appliances etc. As the customer base was growing, it was hard to keep up with the demand, so the company decided to introduce an online webshop to their business. Our task is to develop this platform where they can showcase his products and sell them at the same time.

# 2. Scope

The goal of this project is to create a fully functional web shop, where members can buy some musical equipment or something else. Aside from the main function, this page has to have a user management system, which include registering new users, logging them in and out, changing password and profile details.The project contains the ordinary website elements like, registration, login system, shoping cart, laravel and database, etc. We will use for this project laravel framework.

# 3. Standards & Laws

## General Standards:
Application must meet the following general standards:

- Must be easily understandable and easy to use for the customers.
- Must function in a logical manner for the users.
- Must use the industry best practices.
- Must use styles that are consistent throughout the application and within the associated Web site, including:
- Error messages must appear in a consistent location and style.
- Form controls that are not available must be hidden.

## Browser requirements:
Web application must function and display properly in the following browser versions:

- Mozilla Firefox
- Microsoft Edge
- Google Chrome
- Internet Explorer
- Safari
- Other Web Browser

## Privacy and Cookie Policy

**Obligation to EU privacy laws, it is our responsibility to inform users about how we handle their personal data. For this reason we will provide a Privacy Policy and a Cookie Policy for users to read. In the functional specification it will be explained in details.**

# 4. Current business model

# 5. Requested Business model

- Customers must have an internet connection in order to connect to the website and use it without any disruption.
- Being a registered user is necessary for online purchases.
- Database connection has to be set and fully functional.
- Users have to use a 16:9 pc monitor for the best experience but other aspect rations can be used too.
- Users have to be logged in in order to reach the profile page
- Admins can add, they can delete or modify the items on the webshop.
- Admins can set discounts to certain Items for limited time.

# 6. Request List
| Modul | ID | Name | V | Description |
|--------|---------|-----------|-----------|-------------|
|Database|D1|Name|0.1|Database, tables, relations|
|Authorization|A1|Log-in|0.1|User can log-in to their account|
|Authorization|A2|Register|0.1|User can register a new account|
|Authorization|A3|Log-out|0.1|User can log out from their account|
|Authorization|A4|Change pw|0.1|User can change their password|
|Pages|P1|Home page|0.1| Users automatically navigated to the home page|
|Pages|P2|Categories|0.1|Users can choose what are they searching for (electrical appliances)|
|Pages|P3|Product page|0.1|Users can view one item's description, price etc.|
|Pages|P4|Shopping cart|0.1|Contains the items the user has put in the cart|
|Pages|P5|Order page|0.1|Users can finish orders, fill information and see order details|
|Pages|P6|Order listing|0.1|Certain users can see the list of orders made by users|
|Cart|C1|Add to cart|0.1|Users can add products to their carts|
|Cart|C2|Remove from cart|0.1|Users can remove products from their cart|
|Ordering|O1|Make order|0.1|Users can make new orders|
|Ordering|O2|Complete order|0.1|Admins can mark orders complete|
|Ordering|O3|Delete order|0.1|Admins can delete orders|
|Profile & Pages|PRP1|Profile page|0.1|Users can view profiles|
|Profile|PR1|Edit profile|0.1|User can edit their profile|

# 7. Use-Cases:

## User:
- Able to register a new account
- Able to log in to their account
- Able to log out of their account
- Able to see the home page
- Able to see the product listings by category
- Can filter through the products
- Can open a product and see it's detailed description page
- Able to add products to their cart
- Able to place the order
- Can see their profile details
- Can edit their profile details
- Can change their password

## Manager:
- Has all the user privileges
- Able to add a new product
- Can modify an existing product
- Able to remove a product
- Has access to and able to see all the orders from other users
- Can remove an order
- Can mark order as completed
