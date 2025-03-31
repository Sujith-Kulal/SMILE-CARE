# SMILE-CARE  (FULLSTACK PROJECT) 
SMILE_CARE Dental Management System is a full-stack web-based application designed to streamline dental clinic operations. It enables patients to book appointments, manage their medical records, and access various dental services online .

![image alt](https://github.com/Sujith-Kulal/SMILE-CARE/blob/0b7230cb40be13e972ec81779c3b36ef96819709/Screenshot%20(45).png)

SmileCare Dental 

Project Summary
The SmileCare Dental Management System is a web-based application built with PHP, MySQL, Bootstrap, and JavaScript. It allows patients to book appointments, contact the clinic, and learn about dental services, while administrators and doctors can manage patient records, appointments, and queries.

Key Features
1. Home Page (index.php)
Displays the clinic’s name, mission, and services.
Provides navigation links to different sections like About Us, Services, Contact, and Login.

2. Contact Form (contactus.php)
Allows users to send inquiries using Name, Email, Phone, and Message.
Saves user inquiries into the MySQL database (tblcontactus).
Sends an alert upon successful submission.
Uses prepared statements to prevent SQL injection.

3. Patient Appointment Booking (hms/user-login.php)
Users (patients) can log in to book an appointment.
New users can register and create an account.
Once logged in, patients can select services like dental restoration, extraction, surgery, etc. and choose a preferred date and time.

4. Admin Panel (hms/admin/)
Admins can log in and view all patient bookings.
Can approve or reject appointment requests.
Manages contact form messages submitted by users.

5. Doctor Login (hms/doctor/)
Doctors can log in to check their scheduled appointments.
Can update the status of an appointment (e.g., Completed, Pending, Canceled).
View patient records and history.

How It Works:
User Journey
Visitor lands on the homepage (index.php).
Can browse available services.
Can navigate to the Contact Us or Appointment section.


Contact Inquiry:
Fills out a contact form with their details.
The system stores the message in the tblcontactus table.

Patient Appointment Booking:
If a user wants to book an appointment, they must log in (hms/user-login.php).
If they don't have an account, they must register.
After logging in, they choose a service, date, and time.

Admin & Doctor Panel:
The Admin manages users, appointments, and inquiries.
The Doctor views appointments and updates their status.

Database Structure:
Tables Used
tblusers – Stores patient details.
tblappointments – Stores appointment requests.
tblcontactus – Stores contact form messages.

Technology Stack:
Frontend: HTML, CSS (Bootstrap), JavaScript
Backend: PHP (procedural)
Database: MySQL
Libraries:  Bootstrap, FontAwesome

