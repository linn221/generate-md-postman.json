<h1>Backend</h1><h2>profile</h2><h3>change password</h3><pre><code class="language-http">POST</code></pre>
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
</table><h3>logout</h3><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/logout</code></pre><h3>who am i?</h3><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/profile</code></pre><hr /><h2>sale-processing</h2><h3>voucher</h3><h4>store voucher</h4><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher</code></pre>
<p>[<em>raw</em>]</p>
<p>{
&quot;voucher_number&quot;: &quot;v123456&quot;,
&quot;more_information&quot;: &quot;Facere est voluptas autem ut eum ab sint dolore aut.&quot;,
&quot;customer_name&quot;: &quot;Khaing Thin Thin Htay&quot;,
&quot;phone_number&quot;: &quot;09-14248814&quot;,
&quot;records&quot;: [
{
&quot;product_id&quot;: 19,
&quot;quantity&quot;: 87
},
{
&quot;product_id&quot;: 2,
&quot;quantity&quot;: 66
}
]
}</p><h4>list vouchers</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher?order=voucher_number</code></pre><h4>show voucher</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/42</code></pre><h4>delete voucher</h4><pre><code class="language-http">DELETE</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/52</code></pre><h4>list soft-deleted vouchers</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/show-trash</code></pre><h4>restore</h4><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/restore/25</code></pre><h4>force delete</h4><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/force-delete/3</code></pre><h4>empty bin</h4><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/empty-bin</code></pre><h4>recycle bin</h4><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/voucher/recycle-bin</code></pre><hr /><hr /><h2>inventory-management</h2><h3>products</h3><h4>store</h4><pre><code class="language-http">POST</code></pre>
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
</table><h4>index</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/product?page=2</code></pre><h4>show product</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/product/13</code></pre><h4>update</h4><pre><code class="language-http">PUT</code></pre>
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
</table><h4>delete</h4><pre><code class="language-http">DELETE</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/product/1</code></pre><hr /><h3>brand</h3><h4>store</h4><pre><code class="language-http">POST</code></pre>
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
</table><h4>index</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/brand</code></pre>
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
</tbody>
</table><h4>show</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/brand/15</code></pre>
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
</tbody>
</table><h4>update</h4><pre><code class="language-http">PUT</code></pre>
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
</table><h4>delete</h4><pre><code class="language-http">DELETE</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/brand/5</code></pre><hr /><h3>stock</h3><h4>store</h4><pre><code class="language-http">POST</code></pre>
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
</table><h4>index</h4><pre><code class="language-http">GET</code></pre>
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
</tbody>
</table><h4>show</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/stock/6</code></pre><h4>delete</h4><pre><code class="language-http">DELETE</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/stock/1</code></pre><hr /><h3>categories</h3><h4>list categories</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/category</code></pre><h4>store category</h4><pre><code class="language-http">POST</code></pre>
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
</table><h4>store category Copy</h4><pre><code class="language-http">POST</code></pre>
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
</table><h4>show products</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/category/1</code></pre><h4>update categories</h4><pre><code class="language-http">PUT</code></pre>
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
</table><hr /><hr /><h2>media</h2><h3>upload</h3><pre><code class="language-http">POST</code></pre>
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
</table><h3>display-media</h3><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/photo</code></pre><h3>delete</h3><pre><code class="language-http">DELETE</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/photo/26</code></pre><h3>multiple-delete</h3><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/photo/multiple-delete</code></pre>
<p>[<em>raw</em>]</p>
<p>{
&quot;ids&quot;: [
1,
3
]
}</p><hr /><h2>users</h2><h3>create user</h3><pre><code class="language-http">POST</code></pre>
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
</table><h3>create 2nd user</h3><pre><code class="language-http">POST</code></pre>
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
</table><h3>update user</h3><pre><code class="language-http">PUT</code></pre>
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
</table><h3>show user</h3><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/user/2</code></pre><h3>modify password</h3><pre><code class="language-http">POST</code></pre>
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
</table><h3>list users</h3><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/user</code></pre><h3>ban user</h3><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/ban-user/3</code></pre><hr /><h2>finance</h2><h3>daily</h3><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/daily/17-09-2023</code></pre><h3>sale close</h3><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/close-sale</code></pre><h3>open sale</h3><pre><code class="language-http">POST</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/close-sale?false</code></pre><h3>checkSaleClose</h3><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/sale-close-check</code></pre><h3>monthly</h3><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/monthly/1-2-2023</code></pre><h3>custom-sale-overview</h3><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/finance/custom-sale-overview/2023-09-01/2023-09-20</code></pre><hr /><h2>report</h2><h3>stock-report</h3><h4>stock</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/stock-report?stock_level=in stock</code></pre><h4>best-seller-brands</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/weekly-best-seller-brand</code></pre><h4>testing</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-reprot-weekly</code></pre><hr /><h3>sale-report</h3><h4>this week</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/current-week</code></pre><h4>this month</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/current-month</code></pre><h4>that month</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/current-month?month=1</code></pre><h4>best sale products</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/best-sale-products</code></pre><h4>best sale brands</h4><pre><code class="language-http">GET</code></pre>
<pre><code class="language-http">https://c.mmsdev.site/api/v1/sale-report/best-sale-brands</code></pre><hr /><hr /><h2>Authentication</h2><h3>staff login</h3><pre><code class="language-http">POST</code></pre>
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
</table><h3>admin login</h3><pre><code class="language-http">POST</code></pre>
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
</table><h3>test</h3><pre><code class="language-http">POST</code></pre>
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
</table><h3>admin login (remote credentials)</h3><pre><code class="language-http">POST</code></pre>
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
</table><hr /><hr /><hr />