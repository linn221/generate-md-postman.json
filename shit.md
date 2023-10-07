<!-- TOC start (generated with https://github.com/derlin/bitdowntoc) -->

- [Authentication](#authentication)
   * [staff login](#staff-login)
   * [admin login](#admin-login)
   * [test](#test)
   * [admin login (remote credentials)](#admin-login-remote-credentials)
- [profile](#profile)
   * [users](#users)
      + [create user](#create-user)
      + [create 2nd user](#create-2nd-user)
      + [update user](#update-user)
      + [show user](#show-user)
      + [modify password](#modify-password)
      + [list users](#list-users)
      + [ban user](#ban-user)
   * [change password](#change-password)
   * [logout](#logout)
   * [who am i?](#who-am-i)
- [media](#media)
   * [upload](#upload)
   * [display-media](#display-media)
   * [delete](#delete)
   * [multiple-delete](#multiple-delete)
- [inventory-management](#inventory-management)
   * [products](#products)
      + [store](#store)
      + [index](#index)
      + [show product](#show-product)
      + [update](#update)
      + [delete](#delete-1)
   * [brand](#brand)
      + [store](#store-1)
      + [index](#index-1)
      + [show](#show)
      + [update](#update-1)
      + [delete](#delete-2)
   * [stock](#stock)
      + [store](#store-2)
      + [index](#index-2)
      + [show](#show-1)
      + [delete](#delete-3)
   * [categories](#categories)
      + [list categories](#list-categories)
      + [store category](#store-category)
      + [show products under](#show-products-under)
      + [update categories](#update-categories)
- [sale-processing](#sale-processing)
   * [voucher](#voucher)
      + [store voucher](#store-voucher)
      + [list vouchers](#list-vouchers)
      + [show voucher](#show-voucher)
      + [delete voucher](#delete-voucher)
      + [list soft-deleted vouchers](#list-soft-deleted-vouchers)
      + [restore](#restore)
      + [force delete](#force-delete)
      + [empty bin](#empty-bin)
      + [recycle bin](#recycle-bin)
- [finance](#finance)
   * [daily](#daily)
   * [daily Copy](#daily-copy)
   * [sale close](#sale-close)
   * [open sale](#open-sale)
   * [checkSaleClose](#checksaleclose)
   * [monthly](#monthly)
   * [custom-sale-overview](#custom-sale-overview)
- [report](#report)
   * [stock-report](#stock-report)
      + [stock](#stock-1)
      + [best-seller-brands](#best-seller-brands)
      + [testing](#testing)
   * [sale-report](#sale-report)
      + [this week](#this-week)
      + [this month](#this-month)
      + [that month](#that-month)
      + [best sale products](#best-sale-products)
      + [best sale brands](#best-sale-brands)

<!-- TOC end -->

# Authentication
## staff login


**POST**
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value        
-------- | ---- | -------------
email    | text | stu@gmail.com
password | text | password     


## admin login


**POST**
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value          
-------- | ---- | ---------------
email    | text | admin@gmail.com
password | text | password       


## test


**POST**
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value          
-------- | ---- | ---------------
email    | text | admin@gmail.com
password | text | password       


## admin login (remote credentials)


**POST**
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value       
-------- | ---- | ------------
email    | text | a3@gmail.com
password | text | password    


----------------------------
# profile
## users
### create user

Note:
only admin can create user\
\
**POST**
```http
https://c.mmsdev.site/api/v1/user
```
[*formdata*]

Key          | Type | Value                  
------------ | ---- | -----------------------
name         | text | steve                  
email        | text | steve@gmail.com        
password     | text | password               
phone_number | text | 0988888865             
dob          | text | 1.2.1999               
gender       | text | male                   
address      | text | new york, united states
role         | text | staff                  
photo        | text |                        


### create 2nd user


**POST**
```http
https://c.mmsdev.site/api/v1/user
```
[*formdata*]

Key          | Type | Value                  
------------ | ---- | -----------------------
name         | text | Staff                  
email        | text | stu@gmail.com          
password     | text | asdffdsa               
phone_number | text | 0988888865             
dob          | text | 1.2.1999               
gender       | text | male                   
address      | text | new york, united states
role         | text | staff                  
photo        | text | shit                   


### update user

Note:
staff user can update his info, admin have all previliges, staff cannot update to admin\
\
**PUT**
```http
https://c.mmsdev.site/api/v1/user/4
```
[*urlencoded*]

Key          | Type | Value              
------------ | ---- | -------------------
name         | text | linn               
email        | text | linn@gmail.com     
password     | text | asdffdsa           
phone_number | text | 0988888865         
dob          | text | 1.2.1002           
gender       | text | male               
address      | text | hello worlddddddddd
role         | text | staff              


### show user


**GET**
```http
https://c.mmsdev.site/api/v1/user/2
```

### modify password


**POST**
```http
https://c.mmsdev.site/api/v1/change-staff-password
```
[*formdata*]

Key          | Type | Value    
------------ | ---- | ---------
user_id      | text | 3        
new_password | text | asdfghjkl


### list users


**GET**
```http
https://c.mmsdev.site/api/v1/user
```

### ban user

Note:
only admin can ban a user, banned user can no longer log in, and all his sessions will be destroyed\
\
**POST**
```http
https://c.mmsdev.site/api/v1/ban-user/3
```

----------------------------
## change password


**POST**
```http
https://c.mmsdev.site/api/v1/change-password
```
[*formdata*]

Key              | Type | Value    
---------------- | ---- | ---------
current_password | text | password 
new_password     | text | asdfghjkl


## logout


**POST**
```http
https://c.mmsdev.site/api/v1/logout
```

## who am i?


**GET**
```http
https://c.mmsdev.site/api/v1/profile
```

----------------------------
# media
## upload


**POST**
```http
https://c.mmsdev.site/api/v1/photo
```
[*formdata*]

Key      | Type | Value
-------- | ---- | -----
photos[] | file |      


## display-media


**GET**
```http
https://c.mmsdev.site/api/v1/photo
```

## delete


**DELETE**
```http
https://c.mmsdev.site/api/v1/photo/26
```

## multiple-delete


**POST**
```http
https://c.mmsdev.site/api/v1/photo/multiple-delete
```
[*raw*]

```json
{
    "ids": [
        1,
        3
    ]
}
```


----------------------------
# inventory-management
## products
### store


**POST**
```http
https://c.mmsdev.site/api/v1/product
```
[*formdata*]

Key              | Type | Value                
---------------- | ---- | ---------------------
name             | text | Toothpaste           
brand_id         | text | 1                    
actual_price     | text | 1500                 
sale_price       | text | 1800                 
unit             | text | dozen                
more_information | text | it&#39;s a toothpaste
category_id      | text | 1                    


### index


**GET**
```http
https://c.mmsdev.site/api/v1/product
```

### show product


**GET**
```http
https://c.mmsdev.site/api/v1/product/13
```

### update


**PUT**
```http
https://c.mmsdev.site/api/v1/product/30
```
[*urlencoded*]

Key              | Type | Value                
---------------- | ---- | ---------------------
name             | text | totam                
brand_id         | text | 2                    
category_id      | text | 3                    
actual_price     | text | 1500                 
sale_price       | text | 1800                 
unit             | text | dozen                
more_information | text | it&#39;s a toothpaste


### delete


**DELETE**
```http
https://c.mmsdev.site/api/v1/product/7
```

----------------------------
## brand
### store


**POST**
```http
https://c.mmsdev.site/api/v1/brand
```
[*formdata*]

Key         | Type | Value                                                                                                                                                         
----------- | ---- | --------------------------------------------------------------------------------------------------------------------------------------------------------------
name        | text | Ash                                                                                                                                                           
company     | text | barman                                                                                                                                                        
description | text | Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using  classes. Controllers can
agent       | text | Smith                                                                                                                                                         
phone_no    | text | 0996534554                                                                                                                                                    


### index


**GET**
```http
https://c.mmsdev.site/api/v1/brand
```

### show


**GET**
```http
https://c.mmsdev.site/api/v1/brand/15
```

### update


**PUT**
```http
https://c.mmsdev.site/api/v1/brand/5
```
[*urlencoded*]

Key         | Type | Value                                                                                                                                                         
----------- | ---- | --------------------------------------------------------------------------------------------------------------------------------------------------------------
name        | text | Butt                                                                                                                                                          
company     | text | butt man                                                                                                                                                      
description | text | Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using  classes. Controllers can
agent       | text | Smith                                                                                                                                                         
phone_no    | text | 0996534554                                                                                                                                                    


### delete


**DELETE**
```http
https://c.mmsdev.site/api/v1/brand/5
```

----------------------------
## stock
### store


**POST**
```http
https://c.mmsdev.site/api/v1/stock
```
[*formdata*]

Key              | Type | Value                                                                                                                          
---------------- | ---- | -------------------------------------------------------------------------------------------------------------------------------
product_id       | text | 29                                                                                                                             
quantity         | text | 30                                                                                                                             
more_information | text | down to the underlying model for convenient access. Once the resource is defined, it may be returned from a route or controller


### index


**GET**
```http
https://c.mmsdev.site/api/v1/stock
```

### show


**GET**
```http
https://c.mmsdev.site/api/v1/stock/6
```

### delete


**DELETE**
```http
https://c.mmsdev.site/api/v1/stock/1
```

----------------------------
## categories
### list categories


**GET**
```http
https://c.mmsdev.site/api/v1/category
```

### store category


**POST**
```http
https://c.mmsdev.site/api/v1/category
```
[*formdata*]

Key              | Type | Value   
---------------- | ---- | --------
name             | text | sex toys
more_information | text | sex toys


### show products under


**GET**
```http
https://c.mmsdev.site/api/v1/category/1
```

### update categories


**PUT**
```http
https://c.mmsdev.site/api/v1/category/1
```
[*urlencoded*]

Key     | Type | Value     
------- | ---- | ----------
name    | text | pizza pie!
more_in | text |           


----------------------------
# sale-processing
## voucher
### store voucher


**POST**
```http
https://c.mmsdev.site/api/v1/voucher
```
[*raw*]

```json
{
    "voucher_number": "v123456",
    "more_information": "Facere est voluptas autem ut eum ab sint dolore aut.",
    "customer_name": "Khaing Thin Thin Htay",
    "phone_number": "09-14248814",
    "records": [
        {
            "product_id": 29,
            "quantity": 29
        },
        {
            "product_id": 2,
            "quantity": 66
        }
    ]
}
```


### list vouchers


**GET**
```http
https://c.mmsdev.site/api/v1/voucher
```

### show voucher


**GET**
```http
https://c.mmsdev.site/api/v1/voucher/42
```

### delete voucher


**DELETE**
```http
https://c.mmsdev.site/api/v1/voucher/52
```

### list soft-deleted vouchers


**GET**
```http
https://c.mmsdev.site/api/v1/voucher/show-trash
```

### restore


**POST**
```http
https://c.mmsdev.site/api/v1/voucher/restore/25
```

### force delete


**POST**
```http
https://c.mmsdev.site/api/v1/voucher/force-delete/3
```

### empty bin


**POST**
```http
https://c.mmsdev.site/api/v1/voucher/empty-bin
```

### recycle bin


**POST**
```http
https://c.mmsdev.site/api/v1/voucher/recycle-bin
```

----------------------------
# finance
## daily


**GET**
```http
https://c.mmsdev.site/api/v1/finance/daily/17-09-2023
```

## daily Copy


**GET**
```http
https://c.mmsdev.site/api/v1/finance/daily/17-09-2023
```

## sale close

Note:
only admin can close/open sale, sale status doesn't required to open, implicitly done by current date\
\
**POST**
```http
https://c.mmsdev.site/api/v1/finance/close-sale
```

## open sale


**POST**
```http
https://c.mmsdev.site/api/v1/finance/close-sale?false
```

## checkSaleClose


**GET**
```http
https://c.mmsdev.site/api/v1/finance/sale-close-check
```

## monthly


**GET**
```http
https://c.mmsdev.site/api/v1/finance/monthly/1-2-2023
```

## custom-sale-overview


**GET**
```http
https://c.mmsdev.site/api/v1/finance/custom-sale-overview/2023-09-01/2023-09-20
```

----------------------------
# report
## stock-report
### stock


**GET**
```http
https://c.mmsdev.site/api/v1/stock-report?stock_level=in stock
```

### best-seller-brands


**GET**
```http
https://c.mmsdev.site/api/v1/weekly-best-seller-brand
```

### testing


**GET**
```http
https://c.mmsdev.site/api/v1/sale-reprot-weekly
```

----------------------------
## sale-report
### this week


**GET**
```http
https://c.mmsdev.site/api/v1/sale-report/current-week
```

### this month


**GET**
```http
https://c.mmsdev.site/api/v1/sale-report/current-month
```

### that month


**GET**
```http
https://c.mmsdev.site/api/v1/sale-report/current-month?month=1
```

### best sale products


**GET**
```http
https://c.mmsdev.site/api/v1/sale-report/best-sale-products
```

### best sale brands


**GET**
```http
https://c.mmsdev.site/api/v1/sale-report/best-sale-brands
```

----------------------------

