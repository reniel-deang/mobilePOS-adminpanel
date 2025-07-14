# 🚗🧾 MobilePOS Admin Panel

**MobilePOS Admin Panel** is a web-based portal built with **Laravel** and **Bootstrap**, designed to work seamlessly with the MobilePOS app — a mobile solution for issuing **parking** and **toilet tickets** with thermal printer support.

This admin panel acts as the **central hub** for managing data, configurations, users, and reports. It enables administrators and accounting personnel to monitor usage, generate reports, and customize the behavior and appearance of the MobilePOS system in real time.

---

<img width="100%" alt="dashboard-overview" src="https://github.com/user-attachments/assets/100bcfc9-f3f5-4883-83b0-270a67cbda88" />

---

## 🌟 Key Features

### 🔧 Web Admin Portal

- Built with Laravel and Bootstrap  
- Centralized management of all ticketing data coming from the MobilePOS app  
- Three user roles:  
  - **Admin**  
  - **Accounting**  
  - **MobilePOS User**  

---

### 📊 Admin Dashboard

- Displays key metrics:
  - Total registered accounts
  - Active MobilePOS users (ticket issuers)
  - Current pricing for parking and toilet usage

<img width="100%" alt="dashboard-metrics" src="https://github.com/user-attachments/assets/f8c03c2a-19c1-46b0-9a29-8cb1ef3dd580" />

- Change configuration values like:
  - Parking price
  - Toilet price
  - Ticket layout/format and other details

<div align="center">
  <img width="850" src="https://github.com/user-attachments/assets/bc932825-5ec9-4b06-ac23-6bb044d018c2" />
  <img width="850" src="https://github.com/user-attachments/assets/a8cc3d38-adb0-43a2-a08f-862cb959a505" />
  <img width="850" src="https://github.com/user-attachments/assets/5ffb551f-372c-4b6b-abd7-fa7f91020178" />
  <img width="850" src="https://github.com/user-attachments/assets/6ab3c6ad-07f6-42e4-a4d9-472e6e150f73" />
  <img width="850" src="https://github.com/user-attachments/assets/d7666a41-c088-42a2-a929-7ebe1299bace" />
  <img width="850" src="https://github.com/user-attachments/assets/61c1c380-762e-4bc8-b047-b3f76a4c9321" />
</div>

---

### 📑 Reporting System

- Admins can generate detailed ticketing reports (by date, user, or type)  
- Accounting role has read-only access to dashboard and reports

<img width="100%" alt="reporting-system" src="https://github.com/user-attachments/assets/0a44247e-0016-4753-a876-69fba0b8b99e" />

---

### 📱 MobilePOS Integration

- Mobile app prints receipts using a thermal printer  
- Calculates total charges based on **parking duration**  
- Syncs issued tickets to the web database in real-time or batch  
- 🔗 [MobilePOS App Repository](https://github.com/reniel-deang/mobilePOS-app)

---

## ⚙️ Tech Stack

- **Backend:** Laravel  
- **Frontend:** Blade with Bootstrap 5  
- **Database:** MySQL  
- **Printing:** Thermal Printer Integration via MobilePOS (external app)

---

## 🔓 Open Source and Copyright Notice

**MobilePOS Admin Panel** makes use of several open-source libraries and tools that are respected and acknowledged in their respective licenses. All third-party assets, code, and libraries used are credited to their original authors and are used under their corresponding open-source licenses.

This project is intended for non-commercial, educational, and developmental use only. If you plan to reuse or distribute any part of this platform, please ensure compliance with the licenses of the included open-source components. We encourage learning, collaboration, and open innovation while respecting the intellectual property of contributors across the open-source community.
