# 1. Overview 

## 1.1 About this document

Our team accepted a commission to make a fully functional website for people who are interested in computers and other kind of electric appliances. In this online webshop they can purchase the items they need to fix their gadgets or just to practice their hobbies. This document describes the project in detail, including the website's functionality, the team members, their roles and responsibilities, technologies we use in this project, development plans etc.

## 1.2 Project Overview:

The development team uses multiple technologies and software that that are described in this document. Furthermore, the Business Requirements, the development phases and goals of this project will be documented here.

The following resources and documents will be used during the developement:

- The Functional Requirements of the project

- The features requested by the clients

- The database structure and plan

- The laws and industry standards that this project is subjected

- Regulations

- Terms and conditions

- Cookies

- Logging

- Privacy policies like: advertising policies and third party privacy policies

- CCPA and GDPR data protection rights

Some additional information:

- We are responsible for a website, that introduces computers with their accessories, TV-s, remote controls etc.

- Develop a platform where users can choose from plenty of goods.

- Compare items.

- Get a long description about the chosen electric appliance.

- Look for products in the best price/value .

- Provide a comfortable shopping experience.

# 2. Project plan
## 2.1 Roles and responsibilities
### Backend developer:
Backend developers are responsible for developing the server-side code, they create the website's functions, and the data structures. They mainly use PHP codes and nodejs with Laravel.

### Frontend developer:
Frontend developers implement the visual elements that users see and interact with in the website. They make sure that users have no trouble navigating the website. They use HTML, CSS, JavaScript codes.

### Database developer:
Database developers are responsible for the storage and management of the data we use in this website. 

## 2.2 Team members

- Papp Ágnes - Frontend developer
- Csanádi Balázs Tóbiás - Backend developer, team leader
- Fügedi Csaba - Database developer


- Szabó Patrik - Senior developer, supervisor
- Bozó Tamás Dániel - Supervisor

## 2.3 Project schedule

- 2021/02/18 Requirement and Functional specification documents
- 2021/02/25 System Plan
- 2021/03/04 Development start (Sprint 1)
- 2021/03/11 Development (Sprint 2)
- 2021/03/18 Introduce our project with a demo (+ Development Sprint 3)
- 2021/03/25 Development (Sprint 4), testing
- 2021/04/01 Development finish(Sprint 5), testing
- 2021/04/08 Review, project finish

## 2.4 Milestones

* 2021/02/18 Requirement and Functional specification documents have been finished

## 2.5 Technologies

### Web framework – Bootstap
Bootstap will be used to make the dynamic layout of the webshop, so it works smoothly on all resolutions in the browsers.

### Web server – Apache - Laravel
An Apache web server will be used to store the database information, in which we will store the database writen in MySQL structure and Laravel.

### Programming language – PHP
We are going to write our code in PHP, since it is the most used programming language for building websites. The PHP version which is going to be used is PHP 7.4 or higher since Laravel needs that environment.

### Communication – Discord, GitHub, Trello
- Discord is a communication software made for voice chat. Since Discord is free we are gonna use this software, because it is not sure that all of us will be in the same room when our company develops the webshop the client asked for. With this we will be able to communicate in real time with our coding partners, and since it has a normal chat function that follows the written messages, it will be easy to trace back with the problems that are brought up during development.

- GitHub is a free repository where the project will be stored during development. With this we can share and retrivel the versions of our work, and if something is not working we can reroll the changes so we don't have to start from the beginning.

- Trello is a free web-based Kanban-style list-making application. We can create our task boards with several columns and move the tasks between them. Typically columns include task statuses: To Do, In Progress and Done.

### Data structure store – Laravel
The database structure will be written accordig to the Laravel standards.
<div align="center">
<video width="30%" playsinline="" autoplay="" muted="" loop="" >
    <source src="./images/hero.mp4" type="video/mp4">
</video>
</div>
Recommended version: Latest Stable

# 3. Business model
# 4. Requirements

## 4.1 Functional Requirements

Using common website elements and user management system:

- Register: The users should have the opportunity to sign up. This way they are able to shop and use the shopping cart. After registration they will have an own Profile Page.

- Logging in and out: Editors and users should be able to log in and out.

- Possibility to change password: Users' passwords should be changeable.

- Profile details: Users should be able to see and modify the details on their Profile Page.

Webshop functions:

- Showing cards: Users can easily separate the items and their descriptions if we show them as cards.

- Listing items, browsing: The customer should be able to look around between the products and filter them on the website.

- Shopping cart: The customer should be able to add products to their cart or remove them if necessary.

- Product details: The customer should be able to see our products' details in a separate page.

## 4.2 Non-funtional Requirements

The site must (be):

- Easy to use

- User-friendly

- Able to navigate to the corresponding pages

- Show error messages in different and consistent location and style

- Have control panels, buttons (some of them are hidden from the general users)

- Have permission system

- Fit the EU Privacy Policy requirements

Supported browsers:

- Mozilla Firefox

- Microsoft Edge

- Google Chrome

- Safari

# 5. Functions

## 5.1 Participants

This website has two user level:

- Customer

- Manager

## 5.2 Use cases and scenarios

Customer:

- Able to register a new account

- Able to log in to their account

- Able to log out from their account

- Able to see the home page

- Able to see the product lists according to the category

- Can filter through the products

- Can open a product and see it's detailed description page

- Able to add products to their cart

- Able to pass an order

Manager:

- Has all the user privileges

- Able to add a new product to all of the categories

- Can modify an existing product

- Able to remove a product

- Able to see all the orders from the users

# 6. Physical environments
# 7. Architecture plan
## 7.1 Backend
## 7.2 Frontend
# 8. Database plan
## 8.1 Objects
## 8.2 Helper tables
# 9. Implementation plan
# 10. Test plan

## Test methods
(Later it will be change a lot)

* Database Import
* Database Reach
* Logout Reach
* Carousel Test
* Kategory tree Test (All kategory works properly)
* Login page Test
* Order page Test
* Add Product page Test
* Login Test
* Order Test
* Order List Test
* Product page Test
* Add Cart page Test
* Forgot password Test
* Main Page Test
* Register Page Test
* Registration Test