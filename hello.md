# Backend
## profile
### change password
method: *POST*
```http
https://c.mmsdev.site/api/v1/change-password
```
payload: *formdata*

Array

### logout
method: *POST*
```http
https://c.mmsdev.site/api/v1/logout
```

### who am i?
method: *GET*
```http
https://c.mmsdev.site/api/v1/profile
```

## sale-processing
### voucher
#### store voucher
method: *POST*
```http
https://c.mmsdev.site/api/v1/voucher
```
payload: *raw*

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

#### list vouchers
method: *GET*
```http
https://c.mmsdev.site/api/v1/voucher?order=voucher_number
```

#### show voucher
method: *GET*
```http
https://c.mmsdev.site/api/v1/voucher/42
```

#### delete voucher
method: *DELETE*
```http
https://c.mmsdev.site/api/v1/voucher/52
```

#### list soft-deleted vouchers
method: *GET*
```http
https://c.mmsdev.site/api/v1/voucher/show-trash
```

#### restore
method: *POST*
```http
https://c.mmsdev.site/api/v1/voucher/restore/25
```

#### force delete
method: *POST*
```http
https://c.mmsdev.site/api/v1/voucher/force-delete/3
```

#### empty bin
method: *POST*
```http
https://c.mmsdev.site/api/v1/voucher/empty-bin
```

#### recycle bin
method: *POST*
```http
https://c.mmsdev.site/api/v1/voucher/recycle-bin
```

## inventory-management
### products
#### store
method: *POST*
```http
https://c.mmsdev.site/api/v1/product
```
payload: *formdata*

Array

#### index
method: *GET*
```http
https://c.mmsdev.site/api/v1/product?page=2
```

#### show product
method: *GET*
```http
https://c.mmsdev.site/api/v1/product/13
```

#### update
method: *PUT*
```http
https://c.mmsdev.site/api/v1/product/30
```
payload: *urlencoded*

Array

#### delete
method: *DELETE*
```http
https://c.mmsdev.site/api/v1/product/1
```

### brand
#### store
method: *POST*
```http
https://c.mmsdev.site/api/v1/brand
```
payload: *formdata*

Array

#### index
method: *GET*
```http
https://c.mmsdev.site/api/v1/brand
```
payload: *urlencoded*

Array

#### show
method: *GET*
```http
https://c.mmsdev.site/api/v1/brand/15
```
payload: *formdata*

Array

#### update
method: *PUT*
```http
https://c.mmsdev.site/api/v1/brand/5
```
payload: *urlencoded*

Array

#### delete
method: *DELETE*
```http
https://c.mmsdev.site/api/v1/brand/5
```

### stock
#### store
method: *POST*
```http
https://c.mmsdev.site/api/v1/stock
```
payload: *formdata*

Array

#### index
method: *GET*
```http
https://c.mmsdev.site/api/v1/stock
```
payload: *formdata*

Array

#### show
method: *GET*
```http
https://c.mmsdev.site/api/v1/stock/6
```

#### delete
method: *DELETE*
```http
https://c.mmsdev.site/api/v1/stock/1
```

### categories
#### list categories
method: *GET*
```http
https://c.mmsdev.site/api/v1/category
```

#### store category
method: *POST*
```http
https://c.mmsdev.site/api/v1/category
```
payload: *formdata*

Array

#### store category Copy
method: *POST*
```http
https://c.mmsdev.site/api/v1/category
```
payload: *formdata*

Array

#### show products
method: *GET*
```http
https://c.mmsdev.site/api/v1/category/1
```

#### update categories
method: *PUT*
```http
https://c.mmsdev.site/api/v1/category/1
```
payload: *urlencoded*

Array

## media
### upload
method: *POST*
```http
https://c.mmsdev.site/api/v1/photo
```
payload: *formdata*

Array

### display-media
method: *GET*
```http
https://c.mmsdev.site/api/v1/photo
```

### delete
method: *DELETE*
```http
https://c.mmsdev.site/api/v1/photo/26
```

### multiple-delete
method: *POST*
```http
https://c.mmsdev.site/api/v1/photo/multiple-delete
```
payload: *raw*


{
    "ids": [1, 3]
}

## users
### create user
method: *POST*
```http
https://c.mmsdev.site/api/v1/user
```
payload: *formdata*

Array

### create 2nd user
method: *POST*
```http
https://c.mmsdev.site/api/v1/user
```
payload: *formdata*

Array

### update user
method: *PUT*
```http
https://c.mmsdev.site/api/v1/user/4
```
payload: *urlencoded*

Array

### show user
method: *GET*
```http
https://c.mmsdev.site/api/v1/user/2
```

### modify password
method: *POST*
```http
https://c.mmsdev.site/api/v1/change-staff-password
```
payload: *formdata*

Array

### list users
method: *GET*
```http
https://c.mmsdev.site/api/v1/user
```

### ban user
method: *POST*
```http
https://c.mmsdev.site/api/v1/ban-user/3
```

## finance
### daily
method: *GET*
```http
https://c.mmsdev.site/api/v1/finance/daily/17-09-2023
```

### sale close
method: *POST*
```http
https://c.mmsdev.site/api/v1/finance/close-sale
```

### open sale
method: *POST*
```http
https://c.mmsdev.site/api/v1/finance/close-sale?false
```

### checkSaleClose
method: *GET*
```http
https://c.mmsdev.site/api/v1/finance/sale-close-check
```

### monthly
method: *GET*
```http
https://c.mmsdev.site/api/v1/finance/monthly/1-2-2023
```

### custom-sale-overview
method: *GET*
```http
https://c.mmsdev.site/api/v1/finance/custom-sale-overview/2023-09-01/2023-09-20
```

## report
### stock-report
#### stock
method: *GET*
```http
https://c.mmsdev.site/api/v1/stock-report?stock_level=in stock
```

#### best-seller-brands
method: *GET*
```http
https://c.mmsdev.site/api/v1/weekly-best-seller-brand
```

#### testing
method: *GET*
```http
https://c.mmsdev.site/api/v1/sale-reprot-weekly
```

### sale-report
#### this week
method: *GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-week
```

#### this month
method: *GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-month
```

#### that month
method: *GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-month?month=1
```

#### best sale products
method: *GET*
```http
https://c.mmsdev.site/api/v1/sale-report/best-sale-products
```

#### best sale brands
method: *GET*
```http
https://c.mmsdev.site/api/v1/sale-report/best-sale-brands
```

## Authentication
### staff login
method: *POST*
```http
https://c.mmsdev.site/api/v1/login
```
payload: *formdata*

Array

### admin login
method: *POST*
```http
https://c.mmsdev.site/api/v1/login
```
payload: *formdata*

Array

### test
method: *POST*
```http
https://c.mmsdev.site/api/v1/login
```
payload: *formdata*

Array

### admin login (remote credentials)
method: *POST*
```http
https://c.mmsdev.site/api/v1/login
```
payload: *formdata*

Array

