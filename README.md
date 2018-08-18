# OMS

#### This is the basic structure for Order Mgt System

> We have assumed that all UI is done.
> User has provided following details for order

**User Details** 
Username
Email id
Phone No

**Order Details**

Item List 
Payment Type
 __NOTE:__ If Subscription : date for each month for the subscription

 Order Date Time

Order Total Amount

Tax Amount

**Shipment Details**
Shipping To

Shipping Address

Shipping Date

#### Relationships

Order has Item List.

Order has Shipment.

Order Payment.

Item List has Items.

__TODO__ : 

Need to create item select page and select them on check out page.

pass order details to from checkout page to OrderProcess class 

setup code to save data to database in all model class

call generate label function when needed
