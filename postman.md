#  Backend
# 1. profile
## 1.1. change password


*POST*
```http
https://c.mmsdev.site/api/v1/change-password
```
[*formdata*]

Key              | Type | Value    
---------------- | ---- | ---------
current_password | text | password 
new_password     | text | asdfghjkl


## 1.2. logout


*POST*
```http
https://c.mmsdev.site/api/v1/logout
```

## 1.3. who am i?


*GET*
```http
https://c.mmsdev.site/api/v1/profile
```

----------------------------
# 2. sale-processing
## 2. voucher
## 2.1. store voucher


*POST*
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
            "product_id": 19,
            "quantity": 87
        },
        {
            "product_id": 2,
            "quantity": 66
        }
    ]
}
```


## 2.2. list vouchers


*GET*
```http
https://c.mmsdev.site/api/v1/voucher?order=voucher_number
```

## 2.3. show voucher


*GET*
```http
https://c.mmsdev.site/api/v1/voucher/42
```

## 2.4. delete voucher


*DELETE*
```http
https://c.mmsdev.site/api/v1/voucher/52
```

## 2.5. list soft-deleted vouchers


*GET*
```http
https://c.mmsdev.site/api/v1/voucher/show-trash
```

## 2.6. restore


*POST*
```http
https://c.mmsdev.site/api/v1/voucher/restore/25
```

## 2.7. force delete


*POST*
```http
https://c.mmsdev.site/api/v1/voucher/force-delete/3
```

## 2.8. empty bin


*POST*
```http
https://c.mmsdev.site/api/v1/voucher/empty-bin
```

## 2.9. recycle bin


*POST*
```http
https://c.mmsdev.site/api/v1/voucher/recycle-bin
```

----------------------------
# 3. inventory-management
## 3.1. products
### 3.1.1. store


*POST*
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


### 3.1.2. index


*GET*
```http
https://c.mmsdev.site/api/v1/product?page=2
```

### 3.1.3. show product


*GET*
```http
https://c.mmsdev.site/api/v1/product/13
```

### 3.1.4. update


*PUT*
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


### 3.1.5. delete


*DELETE*
```http
https://c.mmsdev.site/api/v1/product/1
```

----------------------------
## 3.2. brand
### 3.2.1. store


*POST*
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


### 3.2.2. index


*GET*
```http
https://c.mmsdev.site/api/v1/brand
```

### 3.2.3. show


*GET*
```http
https://c.mmsdev.site/api/v1/brand/15
```

### 3.2.4. update


*PUT*
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


### 3.2.5. delete


*DELETE*
```http
https://c.mmsdev.site/api/v1/brand/5
```

----------------------------
## 3.3. stock
### 3.3.1. store


*POST*
```http
https://c.mmsdev.site/api/v1/stock
```
[*formdata*]

Key              | Type | Value                                                                                                                          
---------------- | ---- | -------------------------------------------------------------------------------------------------------------------------------
product_id       | text | 8                                                                                                                              
quantity         | text | 30                                                                                                                             
more_information | text | down to the underlying model for convenient access. Once the resource is defined, it may be returned from a route or controller


### 3.3.2. index


*GET*
```http
https://c.mmsdev.site/api/v1/stock
```

### 3.3.3. show


*GET*
```http
https://c.mmsdev.site/api/v1/stock/6
```

### 3.3.4. delete


*DELETE*
```http
https://c.mmsdev.site/api/v1/stock/1
```

----------------------------
## 3.4. categories
### 3.4.1. list categories


*GET*
```http
https://c.mmsdev.site/api/v1/category
```

### 3.4.2. store category


*POST*
```http
https://c.mmsdev.site/api/v1/category
```
[*formdata*]

Key              | Type | Value                              
---------------- | ---- | -----------------------------------
name             | text | electric                           
more_information | text | electric products like electric fan
                 | text |                                    


### 3.4.3. store category Copy


*POST*
```http
https://c.mmsdev.site/api/v1/category
```
[*formdata*]

Key              | Type | Value   
---------------- | ---- | --------
name             | text | sex toys
more_information | text | sex toys
                 | text |         


### 3.4.4. show products


*GET*
```http
https://c.mmsdev.site/api/v1/category/1
```

### 3.4.5. update categories


*PUT*
```http
https://c.mmsdev.site/api/v1/category/1
```
[*urlencoded*]

Key     | Type | Value     
------- | ---- | ----------
name    | text | pizza pie!
more_in | text |           


----------------------------
# 4. media
## 4.1. upload


*POST*
```http
https://c.mmsdev.site/api/v1/photo
```
[*formdata*]

Key      | Type | Value
-------- | ---- | -----
photos[] | file |      


## 4.2. display-media


*GET*
```http
https://c.mmsdev.site/api/v1/photo
```

## 4.3. delete


*DELETE*
```http
https://c.mmsdev.site/api/v1/photo/26
```

## 4.4. multiple-delete


*POST*
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
# 5. users
## 5.1. create user


*POST*
```http
https://c.mmsdev.site/api/v1/user
```
[*formdata*]

Key          | Type | Value                  
------------ | ---- | -----------------------
name         | text | steve                  
email        | text | steve@gmail.com        
password     | text | asdffdsa               
phone_number | text | 0988888865             
dob          | text | 1.2.1999               
gender       | text | male                   
address      | text | new york, united states
role         | text | staff                  
photo        | text |                        


## 5.2. create 2nd user


*POST*
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


## 5.3. update user


*PUT*
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


## 5.4. show user


*GET*
```http
https://c.mmsdev.site/api/v1/user/2
```

## 5.5. modify password


*POST*
```http
https://c.mmsdev.site/api/v1/change-staff-password
```
[*formdata*]

Key          | Type | Value    
------------ | ---- | ---------
user_id      | text | 3        
new_password | text | asdfghjkl


## 5.6. list users


*GET*
```http
https://c.mmsdev.site/api/v1/user
```

## 5.7. ban user


*POST*
```http
https://c.mmsdev.site/api/v1/ban-user/3
```

----------------------------
# 6. finance
## 6.1. daily


*GET*
```http
https://c.mmsdev.site/api/v1/finance/daily/17-09-2023
```

## 6.2. sale close


*POST*
```http
https://c.mmsdev.site/api/v1/finance/close-sale
```

## 6.3. open sale


*POST*
```http
https://c.mmsdev.site/api/v1/finance/close-sale?false
```

## 6.4. checkSaleClose


*GET*
```http
https://c.mmsdev.site/api/v1/finance/sale-close-check
```

## 6.5. monthly


*GET*
```http
https://c.mmsdev.site/api/v1/finance/monthly/1-2-2023
```

## 6.6. custom-sale-overview


*GET*
```http
https://c.mmsdev.site/api/v1/finance/custom-sale-overview/2023-09-01/2023-09-20
```

----------------------------
# 7. report
## 7.1. stock-report
### 7.1.1. stock


*GET*
```http
https://c.mmsdev.site/api/v1/stock-report?stock_level=in stock
```

### 7.1.2. best-seller-brands


*GET*
```http
https://c.mmsdev.site/api/v1/weekly-best-seller-brand
```

### 7.1.3. testing


*GET*
```http
https://c.mmsdev.site/api/v1/sale-reprot-weekly
```

----------------------------
## 7.2. sale-report
### 7.2.1. this week


*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-week
```

### 7.2.2. this month


*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-month
```

### 7.2.3. that month


*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-month?month=1
```

### 7.2.4. best sale products


*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/best-sale-products
```

### 7.2.5. best sale brands


*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/best-sale-brands
```

----------------------------
# 8. Authentication
## 8.1. staff login


*POST*
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value        
-------- | ---- | -------------
email    | text | stu@gmail.com
password | text | password     


## 8.2. admin login


*POST*
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value          
-------- | ---- | ---------------
email    | text | admin@gmail.com
password | text | password       


## 8.3. test


*POST*
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value          
-------- | ---- | ---------------
email    | text | admin@gmail.com
password | text | password       


## 8.4. admin login (remote credentials)


*POST*
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value       
-------- | ---- | ------------
email    | text | a3@gmail.com
password | text | password    


----------------------------
