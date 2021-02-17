# Requirement Specification

# 1. Introduction
This document contains the detailed requirement description on the client's behalf, including information regarding the client's current business procedures and general standards that the project has to meet. The client, an electrical retail store in Eger, Hungary commissioned the 'Impact Zone' development company to produce an e-commerce platform for the client which they are able to adapt onto their business.

# 2. Current State
Our company is a small retail store in Eger, Hungary, where we are selling electronic appliances including computers and computer accessories, TVs, home appliances, etc. We've been in existence for more than 3 years only as a local store, near the city center of Eger, where the customers are able to inspect, try and purchase from a wide variety of electronic appliances.  Since our beginning, the shop's populatiry grew rapidly, our store expanded in size and as a result, we gained new partners too. Currently we're only available for customers that can visit our local store in Eger, and some of our customers travel to us from a different city too. Because of the increased demand over the years, we would like to improve and extend our business, and as a part of it, we would like to have an e-commerce website where we can satisfy our partners, and customers who live farther away as well. 

# 3. Scope

Our vision is to have an online website, where we can sell our products to our customers without them having to travel miles to our shop. They can select the goods which meet their expectations from the comfort of their homes. On this website they can browse all of our products in store and see their technical details. After choosing their desired product, they have the option to purchase it on the website. After that, our team can see the order on the website, and manage it. The shipping process then can be done manually by one of our employees. Besides that, we would like to have a user management system too. There our customers can register, fill out their personal information like their name and shipping address, and they can purchase with their account more easily.

# 4. Functional Requirements

You can read more in the "Request list" section about the functional requirements. Our current and requested business models contains some more information about this topic as well.

# 5. Standards & Laws
## General Standards:
Application must meet the following general standards:

1.Must be easily understandable and easy to use for the everyday user.

2.Must function in a logical manner for the users who may are not professionals.

3.Must use styles that are consistent throughout the application and within the associated Web site, including:

- Error messages must appear with understandable text.
- Form controls that are not available must be hidden.


## Browser requirements:
-   Mozilla Firefox
-   Microsoft Edge
-   Google Chrome
-   Internet Explorer
-   Safari

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

**Obligation to EU privacy laws, it is our responsibility to inform users about how we handle their personal data. For this reason we will provide a Privacy Policy and a Cookie Policy for users to read.**


# 6. Current Business Model

Our company is a small retail store in Eger, Hungary, where we are selling electronic appliances including computers and computer accessories, TVs, home appliances, etc. The store is located in the city center and it is easy to reach for the local citizens. But as for people who live far it is not the case. The team thinks we could reach more customers by creating a webshop. Right now, we are able to work very well as a team because we have been created a website and managed it correctly. This time the project aims to extend the functionalities of the client company by providing a fully functional online webshop.

Before the release of the webshop, we will be searching for different electronic appliances and look at their description to classify. For example, there are rare ones which are hard to find in the store.  In the current situation, when the CoVid-19 is spreading and infecting people, we need to stay at home. To protect people from infection,  we will create a webshop, which will be connected directly to the product storage, where the customers can find computers and computer accessories, TVs, home appliances, etc they need, so they don't have to go to the store in person. That means every order will be shipped right from the webshop, which makes it easier to save people.

Furthermore, ordering an item online is much more convenient than taking any form of public transportation to get to the store, not even mentioning the exhaust fumes that cars or any type of public transportation vehicle can release to the atmosphere, and also you don't need to spend hours to get to the store, trying to find the computer you wanted, especially if this day is one of the weekend days, you need to deal with the crowd everywhere in the city, and actually in this time you can't be with your loved ones or you can't just relax at home. These are the main reasons the website shall be created and help to make the customers' lives so much easier.


# 7. Requested Business Model

- Customers must have internet connection in order to connect to the website and use it without any disruption.

- Registration is necessary for users for online purchases.

- Database connection has to be set and fully functional.

- Users have to use a 16:9 PC monitor for the best experience but other aspect rations can be used too.

- Users have to be logged in in order to reach their profile page.

- Admins can add, delete or modify the items in the webshop.

- Admins can set discounts to certain electronic appliances for limited time.


# 8. Request List

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

