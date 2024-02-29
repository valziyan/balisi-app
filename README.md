## About Balisi-App

Functional Requirements for Inventory System using Transaction Log Style:
1.	User Authentication and Authorization:
•	The system shall provide user authentication mechanisms to ensure secure access.
•	User roles and permissions shall be defined to control access to system functionalities.
2.	Inventory Management:
•	The system shall allow users to add, update, and delete inventory items.
•	Each inventory item shall have attributes such as name, description, quantity, unit price, category, etc.
•	Users shall be able to search and filter inventory items based on various attributes.
•	The system shall support bulk import and export of inventory data.
3.	Transaction Logging:
•	The system shall maintain a transaction log for all inventory-related activities.
•	Each transaction log entry shall include details such as timestamp, user ID, action performed (e.g., addition, update, deletion), item ID, quantity affected, and any relevant notes.
•	The transaction log shall be immutable and tamper-proof, ensuring data integrity.
4.	Inventory Tracking:
•	The system shall track the movement of inventory items including additions, deductions, transfers, and adjustments.
•	Users shall be able to view the history of each inventory item including all transactions affecting it.
5.	Stock Alerts and Notifications:
•	The system shall provide configurable stock threshold alerts to notify users when inventory levels fall below or exceed specified thresholds.
•	Notifications shall be sent via email, SMS, or in-app notifications based on user preferences.
6.	Reporting and Analytics:
•	The system shall generate reports on inventory levels, stock movements, transaction history, etc., in various formats (e.g., tabular, graphical).
•	Users shall be able to customize reports based on selected criteria such as date range, item category, location, etc.
7.	Integration Capabilities:
•	The system shall support integration with external systems such as accounting software, ERP systems, or e-commerce platforms.
•	APIs shall be provided to allow seamless data exchange between the inventory system and other systems.
8.	Audit Trail:
•	The system shall maintain an audit trail to track all changes made to inventory records, user accounts, and system configurations.
•	Audit trail entries shall include details such as timestamp, user ID, old and new values, and the reason for the change.
9.	Multi-Location Support:
•	The system shall support multiple inventory locations (e.g., warehouses, stores) with the ability to track inventory separately for each location.
•	Users shall be able to transfer inventory between locations and view location-specific stock levels.
10.	Mobile Accessibility:
•	The system shall have a mobile-friendly interface or a dedicated mobile application to allow users to access inventory information and perform actions on the go.

Entities:
1.	Users:
•	Attributes: user_id (Primary Key), username, email, password, role_id
•	Relationships: One-to-Many with Transactions (one user can perform many transactions)
2.	Roles:
•	Attributes: role_id (Primary Key), role_name
•	Relationships: One-to-Many with Users (one role can be assigned to many users)
3.	Inventory Items:
•	Attributes: item_id (Primary Key), name, description, quantity, unit_price, category_id
•	Relationships: One-to-Many with Transactions (one inventory item can be involved in many transactions), Many-to-One with Categories
4.	Categories:
•	Attributes: category_id (Primary Key), name
•	Relationships: One-to-Many with Inventory Items (one category can have many inventory items)
5.	Transactions:
•	Attributes: transaction_id (Primary Key), user_id (Foreign Key), item_id (Foreign Key), action (e.g., addition, update, deletion), quantity, notes, timestamp
•	Relationships: Many-to-One with Users, Many-to-One with Inventory Items
6.	Audit Trail:
•	Attributes: audit_id (Primary Key), user_id (Foreign Key), entity_type (e.g., inventory item, user, configuration), entity_id (Foreign Key), old_value, new_value, timestamp
•	Relationships: Many-to-One with Users
7.	Stock Alerts:
•	Attributes: alert_id (Primary Key), item_id (Foreign Key), threshold_quantity, notification_method (e.g., email, SMS, in-app), timestamp
•	Relationships: Many-to-One with Inventory Items
