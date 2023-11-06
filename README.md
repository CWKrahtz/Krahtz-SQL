<h1 align="center" style="padding:0;margin:0;">Krahtz Clinic: a web application created using React</h1>
<h3 align="center" style="padding:0;margin:0;">Website</h3>
<h4 align="center">Christian Krahtz</h4>
<h6 align="center">DV200 | Term 2</h6>

## Table of Contents

- [Getting Started](#getting-started-with-create-react-app)
    - [Script](#available-scripts)
    - [Learn More](#learn-more)
- [About The Project](#about-the-project)
    - [Description](#description)
- [Before Starting](#before-starting)
    - [Prerequisites](#prerequisites)
- [Features And Functionality](#features-and-functionality) 
- [Concept Process](#concept-process)
    - [Ideation](#ideation)   
    - [Wireframes](#wireframes)
- [Development Process](#development-process)
    - [Implementation Process](#implementation-process)
        - [Highlights](#highlights)
        - [Challenges](#challenges)
    - [Future Implementation](#future-implementation)
- [Final Outcome](#final-outcome)
    - [Mockups](#mockups)
    - [Walkthrough](#walkthrough)
    - [Video Demonstration](#video-demonstration)
- [Conclution](#conclution)

# Getting Started with Create React App

This project was bootstrapped with [Create React App](https://github.com/facebook/create-react-app).

## Available Scripts

In the project directory, you can run:

### `npm start`

Runs the app in the development mode.\
Open [http://localhost:3000](http://localhost:3000) to view it in your browser.

The page will reload when you make changes.\
You may also see any lint errors in the console.

### `npm test`

Launches the test runner in the interactive watch mode.\
See the section about [running tests](https://facebook.github.io/create-react-app/docs/running-tests) for more information.

### `npm run build`

Builds the app for production to the `build` folder.\
It correctly bundles React in production mode and optimizes the build for the best performance.

The build is minified and the filenames include the hashes.\
Your app is ready to be deployed!

See the section about [deployment](https://facebook.github.io/create-react-app/docs/deployment) for more information.

### `npm run eject`

**Note: this is a one-way operation. Once you `eject`, you can't go back!**

If you aren't satisfied with the build tool and configuration choices, you can `eject` at any time. This command will remove the single-build dependency from your project.

Instead, it will copy all the configuration files and the transitive dependencies (webpack, Babel, ESLint, etc) right into your project so you have full control over them. All of the commands except `eject` will still work, but they will point to the copied scripts so you can tweak them. At this point, you're on your own.

You don't have to ever use `eject`. The curated feature set is suitable for small and middle deployments, and you shouldn't feel obligated to use this feature. However, we understand that this tool wouldn't be useful if you couldn't customize it when you are ready for it.

## Learn More

You can learn more in the [Create React App documentation](https://facebook.github.io/create-react-app/docs/getting-started).

To learn React, check out the [React documentation](https://reactjs.org/).

### Code Splitting

This section has moved here: [https://facebook.github.io/create-react-app/docs/code-splitting](https://facebook.github.io/create-react-app/docs/code-splitting)

### Analyzing the Bundle Size

This section has moved here: [https://facebook.github.io/create-react-app/docs/analyzing-the-bundle-size](https://facebook.github.io/create-react-app/docs/analyzing-the-bundle-size)

### Making a Progressive Web App

This section has moved here: [https://facebook.github.io/create-react-app/docs/making-a-progressive-web-app](https://facebook.github.io/create-react-app/docs/making-a-progressive-web-app)

### Advanced Configuration

This section has moved here: [https://facebook.github.io/create-react-app/docs/advanced-configuration](https://facebook.github.io/create-react-app/docs/advanced-configuration)

### Deployment

This section has moved here: [https://facebook.github.io/create-react-app/docs/deployment](https://facebook.github.io/create-react-app/docs/deployment)

### `npm run build` fails to minify

This section has moved here: [https://facebook.github.io/create-react-app/docs/troubleshooting#npm-run-build-fails-to-minify](https://facebook.github.io/create-react-app/docs/troubleshooting#npm-run-build-fails-to-minify)


# About The Project

## Description
In the past, we looked at APIs that ultimately access a repository of data stored in a database. We looked at the most common form of database structure, Structured QWuery Language (SQL). 

For the project, I created my first persistent data system by developing a management portal for a medical practitioner's office.
 
This project was built with Visual Studio Code with the help of XAMPP for managing my database

# Before Starting

## Prerequisites
In order to have access to the database one requires XAMPP to be installed on your device.

To download XAMPP you can simply click the link <a href="https://www.apachefriends.org/">here</a>


# Features And Functionality

On the index page, you won't be able to go to a different page without logging in first. in order to see the other pages you will need to log in with the correct information otherwise you will be given an error that tells you what information field is wrong or missing. When the detail of the user is correct they will be redirected to the home page where the appointments are shown. in the navigation bar, the name of the receptionist that is logged in will be displayed and shown on all pages' navigation bar.

On all the pages you will be able you update/ delete/ create and read the data from my database. On the appointment/home page, the information that can be updated or created uses a select option element that sends the value to the database and not the names selected.

On the other two pages (patients and doctors) the receptionist can update the images of the users and that image is saved in the database and in your local files.

When a receptionist is done she/he can click on the Logout button and will be redirected to the login page and will need to sign in again to view the other pages or to make changes.

# Concept Process

## Ideation

For my inspiration, I looked at Mediclinic and the way they display information about doctors and how they are displayed. Click <a href="https://www.mediclinic.co.za/en/corporate/find-a-doctor.html">here</a> to view.

## Wireframes
<img src="images/wireframes/Wireframe - Register.png">
<img src="images/wireframes/Wireframe - Register-1.png">
<img src="images/wireframes/Wireframe - Login.png">
<img src="images/wireframes/Wireframe - Login-1.png">
<img src="images/wireframes/Wireframe - Doctors-1.png">
<img src="images/wireframes/Wireframe - Doctors-3.png">
<img src="images/wireframes/Wireframe - Patient.png">
<img src="images/wireframes/Wireframe - Patient-1.png">
<img src="images/wireframes/Wireframe - Doctors.png">
<img src="images/wireframes/Wireframe - Doctors-2.png">

# Development Process

## Implementation Process

I started off by setting up my database and adding information I will be required to use in the project. After the database was set up and ready to use I started off with creating a single page where I would be able to display on the page and then I moved it to be displayed as a card. When the read worked for the page I made duplicates of the page and edited it to suit my needs and to display the corresponding data on the pages.

Now that all the pages can read the data from the database I added the code and functionality to create a new user and when that worked I implemented the delete functionality to work with the placeholder data I created with the added functionality. Now that the delete and add worked I added the update functionality till it worked and with that working I copied the code I used for the add, delete, and update and implemented it to work with the other pages and their relevant information.

Now that the CRUD functionality works I worked on the appointment page to display the relevant names that are linked in the appointments table and made it so that you can see the name of the corresponding ID that is saved in the database. When you update an appointment you will be given the names of all the doctors and the patient as well as the receptionist. When the information on the appointment page worked and displayed as I wanted it to. The login page I created last of everything and just before that I made the functionality work with the help of adding and updating an image in the database and to display the correct image with the corresponding data.

### Highlights

* The biggest highlight for me was getting the information on the appointment page to display the names of the people that are associated with the appointments.
* Having a working image display, update, and store in the correct places.
* A functional Login page with functionality.

### Challenges 

* Having the Image stored in the correct places (database and local files)
* Having the Image display
* Appointment page to display the names and not their IDs

## Future Implementation

I would like to implement a functionality so that only one receptionist can edit, add, and delete other receptionists and have the others restricted access to the information.

# Final Outcome
## Mockups
<img src="images/mockups/Mockup_1.png">
<img src="images/mockups/Mockup_2.png">
<img src="images/mockups/Mockup_3.png">

## Walkthrough
You can view the walkthough video <a href="https://drive.google.com/file/d/1XKKRfIpnKq1JE6oaX41Hi-ZQBklt2A5m/view?usp=sharing">here</a>

## Video Demonstration
You can view the demonstration video <a href="https://drive.google.com/file/d/1lEulpf_K2HweDqd7slhcVOExBGD-GI_S/view?usp=sharing">here</a>

# Conclution
In this project, I have learned a lot about what you can accomplish with the use of PHP and MySQL and how it can make the workload a lot less even though we had to think a bit more about ways to solve our errors.
