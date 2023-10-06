# Backend
<h1>Backend</h1>## profile
<h2>profile</h2>### change password
<h3>change password</h3>*POST*
```http
https://c.mmsdev.site/api/v1/change-password
```
[*formdata*]

Key              | Type | Value    
---------------- | ---- | ---------
current_password | text | password 
new_password     | text | asdfghjkl


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/change-password</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>current_password</td>
<td>text</td>
<td>password</td>
</tr>
<tr>
<td>new_password</td>
<td>text</td>
<td>asdfghjkl</td>
</tr>
</tbody>
</table>### logout
<h3>logout</h3>
*POST*
```http
https://c.mmsdev.site/api/v1/logout
```
 
     <p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/logout</code></pre>### who am i?
<h3>who am i?</h3>
*GET*
```http
https://c.mmsdev.site/api/v1/profile
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/profile</code></pre>---------------------------<hr />## sale-processing
<h2>sale-processing</h2>### voucher
<h3>voucher</h3>#### store voucher
<h4>store voucher</h4>*POST*
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

<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher</code></pre>
<p>[<em>raw</em>]</p>
<pre><code class="language-json">{
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
}</code></pre>#### list vouchers
<h4>list vouchers</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/voucher?order=voucher_number
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher?order=voucher_number</code></pre>#### show voucher
<h4>show voucher</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/voucher/42
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/42</code></pre>#### delete voucher
<h4>delete voucher</h4>
*DELETE*
```http
https://c.mmsdev.site/api/v1/voucher/52
```
 
     <p><em>DELETE</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/52</code></pre>#### list soft-deleted vouchers
<h4>list soft-deleted vouchers</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/voucher/show-trash
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/show-trash</code></pre>#### restore
<h4>restore</h4>
*POST*
```http
https://c.mmsdev.site/api/v1/voucher/restore/25
```
 
     <p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/restore/25</code></pre>#### force delete
<h4>force delete</h4>
*POST*
```http
https://c.mmsdev.site/api/v1/voucher/force-delete/3
```
 
     <p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/force-delete/3</code></pre>#### empty bin
<h4>empty bin</h4>
*POST*
```http
https://c.mmsdev.site/api/v1/voucher/empty-bin
```
 
     <p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/empty-bin</code></pre>#### recycle bin
<h4>recycle bin</h4>
*POST*
```http
https://c.mmsdev.site/api/v1/voucher/recycle-bin
```
 
     <p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/recycle-bin</code></pre>---------------------------<hr />## inventory-management
<h2>inventory-management</h2>### products
<h3>products</h3>#### store
<h4>store</h4>*POST*
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


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/product</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>Toothpaste</td>
</tr>
<tr>
<td>brand_id</td>
<td>text</td>
<td>1</td>
</tr>
<tr>
<td>actual_price</td>
<td>text</td>
<td>1500</td>
</tr>
<tr>
<td>sale_price</td>
<td>text</td>
<td>1800</td>
</tr>
<tr>
<td>unit</td>
<td>text</td>
<td>dozen</td>
</tr>
<tr>
<td>more_information</td>
<td>text</td>
<td>it&#39;s a toothpaste</td>
</tr>
<tr>
<td>category_id</td>
<td>text</td>
<td>1</td>
</tr>
</tbody>
</table>#### index
<h4>index</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/product?page=2
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/product?page=2</code></pre>#### show product
<h4>show product</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/product/13
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/product/13</code></pre>#### update
<h4>update</h4>*PUT*
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


<p><em>PUT</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/product/30</code></pre>
<p>[<em>urlencoded</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>totam</td>
</tr>
<tr>
<td>brand_id</td>
<td>text</td>
<td>2</td>
</tr>
<tr>
<td>category_id</td>
<td>text</td>
<td>3</td>
</tr>
<tr>
<td>actual_price</td>
<td>text</td>
<td>1500</td>
</tr>
<tr>
<td>sale_price</td>
<td>text</td>
<td>1800</td>
</tr>
<tr>
<td>unit</td>
<td>text</td>
<td>dozen</td>
</tr>
<tr>
<td>more_information</td>
<td>text</td>
<td>it&#39;s a toothpaste</td>
</tr>
</tbody>
</table>#### delete
<h4>delete</h4>
*DELETE*
```http
https://c.mmsdev.site/api/v1/product/1
```
 
     <p><em>DELETE</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/product/1</code></pre>---------------------------<hr />### brand
<h3>brand</h3>#### store
<h4>store</h4>*POST*
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


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/brand</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>Ash</td>
</tr>
<tr>
<td>company</td>
<td>text</td>
<td>barman</td>
</tr>
<tr>
<td>description</td>
<td>text</td>
<td>Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using  classes. Controllers can</td>
</tr>
<tr>
<td>agent</td>
<td>text</td>
<td>Smith</td>
</tr>
<tr>
<td>phone_no</td>
<td>text</td>
<td>0996534554</td>
</tr>
</tbody>
</table>#### index
<h4>index</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/brand
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/brand</code></pre>#### show
<h4>show</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/brand/15
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/brand/15</code></pre>#### update
<h4>update</h4>*PUT*
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


<p><em>PUT</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/brand/5</code></pre>
<p>[<em>urlencoded</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>Butt</td>
</tr>
<tr>
<td>company</td>
<td>text</td>
<td>butt man</td>
</tr>
<tr>
<td>description</td>
<td>text</td>
<td>Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using  classes. Controllers can</td>
</tr>
<tr>
<td>agent</td>
<td>text</td>
<td>Smith</td>
</tr>
<tr>
<td>phone_no</td>
<td>text</td>
<td>0996534554</td>
</tr>
</tbody>
</table>#### delete
<h4>delete</h4>
*DELETE*
```http
https://c.mmsdev.site/api/v1/brand/5
```
 
     <p><em>DELETE</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/brand/5</code></pre>---------------------------<hr />### stock
<h3>stock</h3>#### store
<h4>store</h4>*POST*
```http
https://c.mmsdev.site/api/v1/stock
```
[*formdata*]

Key              | Type | Value                                                                                                                          
---------------- | ---- | -------------------------------------------------------------------------------------------------------------------------------
product_id       | text | 8                                                                                                                              
quantity         | text | 30                                                                                                                             
more_information | text | down to the underlying model for convenient access. Once the resource is defined, it may be returned from a route or controller


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/stock</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>product_id</td>
<td>text</td>
<td>8</td>
</tr>
<tr>
<td>quantity</td>
<td>text</td>
<td>30</td>
</tr>
<tr>
<td>more_information</td>
<td>text</td>
<td>down to the underlying model for convenient access. Once the resource is defined, it may be returned from a route or controller</td>
</tr>
</tbody>
</table>#### index
<h4>index</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/stock
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/stock</code></pre>#### show
<h4>show</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/stock/6
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/stock/6</code></pre>#### delete
<h4>delete</h4>
*DELETE*
```http
https://c.mmsdev.site/api/v1/stock/1
```
 
     <p><em>DELETE</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/stock/1</code></pre>---------------------------<hr />### categories
<h3>categories</h3>#### list categories
<h4>list categories</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/category
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/category</code></pre>#### store category
<h4>store category</h4>*POST*
```http
https://c.mmsdev.site/api/v1/category
```
[*formdata*]

Key              | Type | Value                              
---------------- | ---- | -----------------------------------
name             | text | electric                           
more_information | text | electric products like electric fan
                 | text |                                    


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/category</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>electric</td>
</tr>
<tr>
<td>more_information</td>
<td>text</td>
<td>electric products like electric fan</td>
</tr>
<tr>
<td>text</td>
</tr>
</tbody>
</table>#### store category Copy
<h4>store category Copy</h4>*POST*
```http
https://c.mmsdev.site/api/v1/category
```
[*formdata*]

Key              | Type | Value   
---------------- | ---- | --------
name             | text | sex toys
more_information | text | sex toys
                 | text |         


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/category</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>sex toys</td>
</tr>
<tr>
<td>more_information</td>
<td>text</td>
<td>sex toys</td>
</tr>
<tr>
<td>text</td>
</tr>
</tbody>
</table>#### show products
<h4>show products</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/category/1
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/category/1</code></pre>#### update categories
<h4>update categories</h4>*PUT*
```http
https://c.mmsdev.site/api/v1/category/1
```
[*urlencoded*]

Key     | Type | Value     
------- | ---- | ----------
name    | text | pizza pie!
more_in | text |           


<p><em>PUT</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/category/1</code></pre>
<p>[<em>urlencoded</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>pizza pie!</td>
</tr>
<tr>
<td>more_in</td>
<td>text</td>
</tr>
</tbody>
</table>---------------------------<hr />## media
<h2>media</h2>### upload
<h3>upload</h3>*POST*
```http
https://c.mmsdev.site/api/v1/photo
```
[*formdata*]

Key      | Type | Value
-------- | ---- | -----
photos[] | file |      


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/photo</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>photos[]</td>
<td>file</td>
</tr>
</tbody>
</table>### display-media
<h3>display-media</h3>
*GET*
```http
https://c.mmsdev.site/api/v1/photo
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/photo</code></pre>### delete
<h3>delete</h3>
*DELETE*
```http
https://c.mmsdev.site/api/v1/photo/26
```
 
     <p><em>DELETE</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/photo/26</code></pre>### multiple-delete
<h3>multiple-delete</h3>*POST*
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

<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/photo/multiple-delete</code></pre>
<p>[<em>raw</em>]</p>
<pre><code class="language-json">{
    "ids": [
        1,
        3
    ]
}</code></pre>---------------------------<hr />## users
<h2>users</h2>### create user
<h3>create user</h3>*POST*
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


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/user</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>steve</td>
</tr>
<tr>
<td>email</td>
<td>text</td>
<td>steve@gmail.com</td>
</tr>
<tr>
<td>password</td>
<td>text</td>
<td>asdffdsa</td>
</tr>
<tr>
<td>phone_number</td>
<td>text</td>
<td>0988888865</td>
</tr>
<tr>
<td>dob</td>
<td>text</td>
<td>1.2.1999</td>
</tr>
<tr>
<td>gender</td>
<td>text</td>
<td>male</td>
</tr>
<tr>
<td>address</td>
<td>text</td>
<td>new york, united states</td>
</tr>
<tr>
<td>role</td>
<td>text</td>
<td>staff</td>
</tr>
<tr>
<td>photo</td>
<td>text</td>
</tr>
</tbody>
</table>### create 2nd user
<h3>create 2nd user</h3>*POST*
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


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/user</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>Staff</td>
</tr>
<tr>
<td>email</td>
<td>text</td>
<td>stu@gmail.com</td>
</tr>
<tr>
<td>password</td>
<td>text</td>
<td>asdffdsa</td>
</tr>
<tr>
<td>phone_number</td>
<td>text</td>
<td>0988888865</td>
</tr>
<tr>
<td>dob</td>
<td>text</td>
<td>1.2.1999</td>
</tr>
<tr>
<td>gender</td>
<td>text</td>
<td>male</td>
</tr>
<tr>
<td>address</td>
<td>text</td>
<td>new york, united states</td>
</tr>
<tr>
<td>role</td>
<td>text</td>
<td>staff</td>
</tr>
<tr>
<td>photo</td>
<td>text</td>
<td>shit</td>
</tr>
</tbody>
</table>### update user
<h3>update user</h3>*PUT*
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


<p><em>PUT</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/user/4</code></pre>
<p>[<em>urlencoded</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>text</td>
<td>linn</td>
</tr>
<tr>
<td>email</td>
<td>text</td>
<td>linn@gmail.com</td>
</tr>
<tr>
<td>password</td>
<td>text</td>
<td>asdffdsa</td>
</tr>
<tr>
<td>phone_number</td>
<td>text</td>
<td>0988888865</td>
</tr>
<tr>
<td>dob</td>
<td>text</td>
<td>1.2.1002</td>
</tr>
<tr>
<td>gender</td>
<td>text</td>
<td>male</td>
</tr>
<tr>
<td>address</td>
<td>text</td>
<td>hello worlddddddddd</td>
</tr>
<tr>
<td>role</td>
<td>text</td>
<td>staff</td>
</tr>
</tbody>
</table>### show user
<h3>show user</h3>
*GET*
```http
https://c.mmsdev.site/api/v1/user/2
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/user/2</code></pre>### modify password
<h3>modify password</h3>*POST*
```http
https://c.mmsdev.site/api/v1/change-staff-password
```
[*formdata*]

Key          | Type | Value    
------------ | ---- | ---------
user_id      | text | 3        
new_password | text | asdfghjkl


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/change-staff-password</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>user_id</td>
<td>text</td>
<td>3</td>
</tr>
<tr>
<td>new_password</td>
<td>text</td>
<td>asdfghjkl</td>
</tr>
</tbody>
</table>### list users
<h3>list users</h3>
*GET*
```http
https://c.mmsdev.site/api/v1/user
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/user</code></pre>### ban user
<h3>ban user</h3>
*POST*
```http
https://c.mmsdev.site/api/v1/ban-user/3
```
 
     <p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/ban-user/3</code></pre>---------------------------<hr />## finance
<h2>finance</h2>### daily
<h3>daily</h3>
*GET*
```http
https://c.mmsdev.site/api/v1/finance/daily/17-09-2023
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/daily/17-09-2023</code></pre>### sale close
<h3>sale close</h3>
*POST*
```http
https://c.mmsdev.site/api/v1/finance/close-sale
```
 
     <p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/close-sale</code></pre>### open sale
<h3>open sale</h3>
*POST*
```http
https://c.mmsdev.site/api/v1/finance/close-sale?false
```
 
     <p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/close-sale?false</code></pre>### checkSaleClose
<h3>checkSaleClose</h3>
*GET*
```http
https://c.mmsdev.site/api/v1/finance/sale-close-check
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/sale-close-check</code></pre>### monthly
<h3>monthly</h3>
*GET*
```http
https://c.mmsdev.site/api/v1/finance/monthly/1-2-2023
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/monthly/1-2-2023</code></pre>### custom-sale-overview
<h3>custom-sale-overview</h3>
*GET*
```http
https://c.mmsdev.site/api/v1/finance/custom-sale-overview/2023-09-01/2023-09-20
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/custom-sale-overview/2023-09-01/2023-09-20</code></pre>---------------------------<hr />## report
<h2>report</h2>### stock-report
<h3>stock-report</h3>#### stock
<h4>stock</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/stock-report?stock_level=in stock
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/stock-report?stock_level=in stock</code></pre>#### best-seller-brands
<h4>best-seller-brands</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/weekly-best-seller-brand
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/weekly-best-seller-brand</code></pre>#### testing
<h4>testing</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/sale-reprot-weekly
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-reprot-weekly</code></pre>---------------------------<hr />### sale-report
<h3>sale-report</h3>#### this week
<h4>this week</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-week
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/current-week</code></pre>#### this month
<h4>this month</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-month
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/current-month</code></pre>#### that month
<h4>that month</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/current-month?month=1
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/current-month?month=1</code></pre>#### best sale products
<h4>best sale products</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/best-sale-products
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/best-sale-products</code></pre>#### best sale brands
<h4>best sale brands</h4>
*GET*
```http
https://c.mmsdev.site/api/v1/sale-report/best-sale-brands
```
 
     <p><em>GET</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/best-sale-brands</code></pre>---------------------------<hr />## Authentication
<h2>Authentication</h2>### staff login
<h3>staff login</h3>*POST*
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value        
-------- | ---- | -------------
email    | text | stu@gmail.com
password | text | password     


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/login</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>email</td>
<td>text</td>
<td>stu@gmail.com</td>
</tr>
<tr>
<td>password</td>
<td>text</td>
<td>password</td>
</tr>
</tbody>
</table>### admin login
<h3>admin login</h3>*POST*
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value          
-------- | ---- | ---------------
email    | text | admin@gmail.com
password | text | password       


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/login</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>email</td>
<td>text</td>
<td>admin@gmail.com</td>
</tr>
<tr>
<td>password</td>
<td>text</td>
<td>password</td>
</tr>
</tbody>
</table>### test
<h3>test</h3>*POST*
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value          
-------- | ---- | ---------------
email    | text | admin@gmail.com
password | text | password       


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/login</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>email</td>
<td>text</td>
<td>admin@gmail.com</td>
</tr>
<tr>
<td>password</td>
<td>text</td>
<td>password</td>
</tr>
</tbody>
</table>### admin login (remote credentials)
<h3>admin login (remote credentials)</h3>*POST*
```http
https://c.mmsdev.site/api/v1/login
```
[*formdata*]

Key      | Type | Value       
-------- | ---- | ------------
email    | text | a3@gmail.com
password | text | password    


<p><em>POST</em></p>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/login</code></pre>
<p>[<em>formdata</em>]</p>
<table>
<thead>
<tr>
<th>Key</th>
<th>Type</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>email</td>
<td>text</td>
<td>a3@gmail.com</td>
</tr>
<tr>
<td>password</td>
<td>text</td>
<td>password</td>
</tr>
</tbody>
</table>---------------------------<hr />