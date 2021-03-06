# 1. Current State 

Our team is a small web developer company that aims to develop modern and quality web platforms for our clients. The team consists of 3 members and two senior supervisor.
We've been commissioned by the owner of a relatively new electrical store, to create an e-commerce website that he can use in his business, so he can reach more people. The business is selling electrical appliances, like computers, televisions, home appliances etc. As the customer base was growing, it was hard to keep up with the demand, so the company decided to introduce an online webshop to their business. Our task is to develop this platform where they can showcase his products and sell them at the same time.

# 2. Scope

The goal of this project is to create a fully functional webshop, where customers can browse and purchase common electronic appliances. Aside from the main function, this page has to have a user management system, which includes registering new users, logging them in and out, changing password and profile details. The project also contains common website elements like, registration, login system, shoping cart, database, etc. The project main framework will be the Laravel technology and Bootstrap as it's frontend framework. 

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
- Opera

## Development Technology, Programming Language, and Web Server Software
Web application requires the use of the following (or higher) technologies:

- PHP 7.2
- Apache 2.4.0
- MySQL 8.0 Recommended IDE:
- NetBeans IDE 9.0

## Online shop regulations

**Definitions:**

1. The seller - Electrical retail store

2. Customer - An individual who is at least 16 years old, in case he/she is not 18 yet the consent of his/her legal representative is required.

3. Online store / Shop / Webshop 
- Internet service available at (-not yet clarified-) through which a customer can purchase goods from the seller.

4. Goods - Movable items presented in the online shop.

5. Regulations 
- Rules and laws of the operation of an online shop.

**General provisions:**

1. Online shop is run by the seller.

2. The regulations define the rules for the conclusion between the seller and the customer contracts for the sale of goods by means of distance communication and use by customers of the online store.

3. Photos of the goods are placed in the online store for exemplary purposes only.

4. Information about the price given in the online store is binding from the moment of receipt of the e-mails. After successful submission of the order, this price will not change.

5. Prerequisite for a successful placing an order, is to provide accurate and real data at registration as well as at the Order Page.

**The scope of the terms and conditions of use the online shop:**

1. To use the service provided by the online store, the customer need to recognize these rules and accept them.

2. The provided information in the registration form and Order Page should be truthful and current. If the customer provides incorrect or outdated information, in particular as regards to the personal data of the customer, the seller is not obliged to carry out orders. 

3. Seller shall take the necessary technical and organizational measures to prevent acquisition and modification data provided by the customer during registration and when ordering by unauthorized users.

**Placing an order:**

1. Orders for goods available in the online shop are made through the Order Page.

2. Placing an order through Order Page is possible around the clock, every day of the week. Orders placed on weekdays will be implemented on an ongoing basis. Orders placed on Saturdays, Sundays and holidays will be implemented no earlier than the next business day. Users must accept that.

3. An order shall be made after logging in to the store. In the absence of the customer registration in the online shop placing an order is not possible.

4. Sending the order by the customer constitutes an offer submitted by the customer to the seller to enter into a contract of sale, in accordance with the regulations.

5. After sending the order the customer receives confirmation of acceptance of his offer by electronic means (confirmation of the order), at the e-mail address indicated by the customer. After receiving above-mentioned acceptance agreement of sale is valid.

## Privacy and Cookie Policy

**Obligation to EU privacy laws, it is our responsibility to inform users about how we handle their personal data. For this reason we will provide a Privacy Policy and a Cookie Policy for users to read. In the functional specification it will be explained in details.**


# 4. Current business model

The client's business is currently existing as a physical retail store in Eger, Hungary, where customers can visit and purchase electrical equipment. This process is sufficient enough, however it's far from optimal for the customer and the business. Due to the store only existing in physical form, the customer has to travel to the store, find the product they are looking for, and if needed, ask technical details about the product form an employee. If the shop gets crowded, it might be difficult to handle all the customers' requests. 
As a solution, the employer hired more personnel to satisfy customers during peak hours. Obviously this costs money and since the extra staff is only needed during peak hours, it is unnesesary to keep them in the store while there's less traffic there. Furthermore, due to the current state of the coronavirus and the advised stay-at-home policy, more customer chooses to shop online, and since the store not having any online presence they are missing out on potential revenue source. 

This situation is not beneficial for the company nor the customers, and it could be solved with an online webshop, where customers could browse through and find any item they like easily from their home. This webshop will be connected with the storage of this shop, and all the product information will be available on the website for the customer to inspect. 
Additionally, the website will provide all the functions of ordering, including payment, choosing delivery location, and the company will make sure the product will be sent to your home.

Furthermore, ordering an item online is much more convenient than taking any form of public transportation to get to the store, not even mentioning the exhaust fumes that cars or any type of public transportation vehicle can release to the atmosphere, and also you don't need to spend hours to get to the store, trying to find the device you wanted, especially if this day is one of the weekend days, you need to deal with the crowd everywhere in the city, and actually in this time you can't be with your loved ones or you can't just relax at home. These are the main reasons the website shall be created and help to make the customers' lives so much easier.

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
