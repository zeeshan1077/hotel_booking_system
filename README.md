# hotel-booking 
**Online Hotel Booking &amp; Management System**

## Project Overview

This project is a **Hotel Management System** built with PHP, Bootstrap, and MySQL. It allows hotel admins to manage rooms, bookings, categories, and managers. Additionally, it features a data visualization module that displays famous tourist places in Pakistan and around the world using the Wikipedia API.

---

## Features

**User Role**

- User can view Room facilities, price and availability of the room
- They can book their desire room from online.

**Admin Role**

- Secure Login System for Admin Panel
- Add, Delete, Edit Room Facilities
- Add, Delete, Edit Room Category
- ADD, Remove, Edit Number of Rooms
- View Booked Room
- Add new Admin 

- **Room Category Management:** Add, edit, and view room categories.
- **Room Booking:** Book rooms, view all bookings, and edit bookings.
- **Manager Registration:** Add new managers to the system.
- **Data Visualization:** 
  - Visualizes hotel room stats (booked/available) using Chart.js.
  - Displays famous tourist places dynamically fetched from Wikipedia.
- **Responsive Design:** Uses Bootstrap for a modern, mobile-friendly interface.

---

## Technologies

- **HTML** for webpages stucture
- **Bootstrap** for UI
- **Chart.js** for data visualization
- **PHP** for backend 
- **mySQL** for database 
- **Wikipedia API** for tourist places data

---

---

## API Integration

- **Tourist Places API:**  
  The project uses a PHP endpoint (`api/bestplace.php`) to fetch famous places in Pakistan (or globally) from Wikipedia.  
  The frontend (`bestplaces_view.php`) visualizes this data in a user-friendly format.


---

## How to Run

1. **Clone the repository:**
   ```
   git clone https://github.com/<your-group>/<your-repo>.git
   ```

2. **Setup XAMPP:**
   - Place the project folder in `c:/xampp/htdocs/`.
   - Start Apache and MySQL from XAMPP Control Panel.

3. **Database Setup:**
   - Import the provided SQL file (if any) into phpMyAdmin.
   - Update database credentials in `admin/include/class.user.php` if needed.

4. **Access the Application:**
   - Open your browser and go to:  
     `http://localhost/hotel/admin.php`

5. **View Tourist Places:**
   - Click on the "Best Places" link in the navigation to see famous places visualized.

---

## Group Members

- **Member 1:** [Ahmed Muhammad Chorahi]
- **Member 2:** [Muhammad Umar Farooq]
- **Member 3:** [Zeeshan Aziz Khan]
- **Member 4:** [Muhammad Arslan]

---

## File Structure

```
hotel/
│
├── admin.php                # Main admin dashboard
├── api/
│   └── bestplace.php        # API for fetching tourist places
├── bestplaces_view.php      # Visualization page for tourist places
├── admin/
│   └── include/
│       └── class.user.php   # User and DB management
├── css/
│   └── bootstrap.min.css    # Styles
├── js/
│   └── bootstrap.min.js     # JS scripts
└── ...other files...
```


