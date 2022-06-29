<h1>輔仁管理評論</h1>

<ui>
  <li>
    <h5>程式語言: html、php</h5>
  </li>
  
  <li>
    <h5>伺服器: Apache</h5>
  </li>
  
  <li>
    <h5>資料庫: MySQL</h5>
  </li>
  
  <li>
    <h5>首頁(index.php)</h5>
    ![image](https://user-images.githubusercontent.com/83577156/176375677-5ce36a69-f383-4d20-84d6-f9cbbdaadb2c.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176375710-1254db45-4f4e-4f9a-8b3b-d91f447684eb.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176375745-dfd2a558-2fdf-4e63-b846-ec75af5621d7.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176375780-0dd1cb1a-0939-46db-a51c-2d5fae9e705a.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176375805-c482a4b5-12d9-47c1-89cd-1fb21869407d.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176375819-e4fc3645-0469-4bf3-a4f8-f9b3f72140c0.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176375838-c3620a8d-9913-4678-abcc-22eee79aa73f.png)</br>
  </li>
    
  <li>
    <h5>登入頁面(loginindex.php)</h5>
    ![image](https://user-images.githubusercontent.com/83577156/176376533-c02e1e17-de29-4454-9e7c-b83a5054b4c2.png)</br>
  </li>
    
  <li>
    <h5>註冊頁面(register.html)</h5>
    ![image](https://user-images.githubusercontent.com/83577156/176376580-4e1de829-bb01-4b0b-b178-4fbe4c71d395.png)</br>
  </li>
    
  <li>
    <h5>忘記密碼(forget.php)</h5>
    ![image](https://user-images.githubusercontent.com/83577156/176376679-e4fcefe7-e6a5-4b5e-a636-55231b54fa04.png)</br>
  </li>
    
  <li>
    <h5>投稿者頁面(contributor.php)</h5>
    ![image](https://user-images.githubusercontent.com/83577156/176377335-d45b283a-e732-4a64-ad8c-dae53d868462.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176377740-fc048fce-907b-4a62-bcef-c889265ec925.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176377787-49fe5dfc-e0d3-458e-b5a2-92e066cfb4c2.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176377916-eb212fc1-8b5a-4703-8b5e-1398deab31ec.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176377949-debe2afe-e3e8-48b1-b2c5-538f47be71fe.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176378013-07b62c33-e1d6-486b-9dcb-4a64c9272286.png)</br>
  </li>
    
  <li>
    <h5>審稿者頁面(reviewer.php)</h5>
    ![image](https://user-images.githubusercontent.com/83577156/176378252-424aafb8-b5be-4d29-b96a-6709461551ae.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176378274-4034b5b6-1def-4c94-a5ef-6782282779ef.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176378291-a2170d42-ab30-4500-9110-999135266df0.png)</br>
  </li>
    
  <li>
    <h5>管理者頁面(manager.php)</h5>
    ![image](https://user-images.githubusercontent.com/83577156/176378595-8fccfda1-9b7e-4ad3-af2e-3c246dc1c227.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176378616-c01cd79e-06b1-49bb-8968-0d6d21148c23.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176378643-861831d6-7eb8-4a4d-aa98-558549a7a6f3.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176378671-a7fb7879-fce0-4ce9-807f-af4bd0ebab4c.png)</br>
    ![image](https://user-images.githubusercontent.com/83577156/176378697-06fdfe0f-b4d2-41de-939f-317fcc72dfb6.png)</br>
  </li>
</ui>

<h5>資料庫欄位:</h5>
<h5>article</h5>
<table>
  <tbody>
    <tr>
      <td>
        <p>欄位</p>
      </td>
      <td>
        <p>類型</p>
      </td>
      <td>
        <p>空值</p>
      </td>
      <td>
        <p>預設值</p>
      </td>
      <td>
        <p>備註</p>
      </td>
    </tr>

    <tr>
      <td>
        <p>articleid(主鍵)</p>
      </td>
      <td>
        <p>int(11)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>articlename</p>
      </td>
      <td>
        <p>varchar(50)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>articletype</p>
      </td>
      <td>
        <p>varchar(100)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>articlecontent</p>
      </td>
      <td>
        <p>varchar(500)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>articlepath</p>
      </td>
      <td>
        <p>varchar(500)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>contributor</p>
      </td>
      <td>
        <p>varchar(10)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>reviewer1</p>
      </td>
      <td>
        <p>varchar(10)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>reviewer2</p>
      </td>
      <td>
        <p>varchar(10)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>managerreply</p>
      </td>
      <td>
        <p>varchar(10)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>
  </tbody>
</table>

<h5>article1</h5>
<table>
  <tbody>
    <tr>
      <td>
        <p>欄位</p>
      </td>
      <td>
        <p>類型</p>
      </td>
      <td>
        <p>空值</p>
      </td>
      <td>
        <p>預設值</p>
      </td>
      <td>
        <p>備註</p>
      </td>
    </tr>

    <tr>
      <td>
        <p>replyid (主鍵)</p>
      </td>
      <td>
        <p>int(11)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>reviewer</p>
      </td>
      <td>
        <p>varchar(15)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>replydecision</p>
      </td>
      <td>
        <p>varchar(20)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>replycontent</p>
      </td>
      <td>
        <p>varchar(1000)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>replypath</p>
      </td>
      <td>
        <p>varchar(100)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>
  </tbody>
</table>

<h5>article2</h5>
<table>
  <tbody>
    <tr>
      <td>
        <p>欄位</p>
      </td>
      <td>
        <p>類型</p>
      </td>
      <td>
        <p>空值</p>
      </td>
      <td>
        <p>預設值</p>
      </td>
      <td>
        <p>備註</p>
      </td>
    </tr>

    <tr>
      <td>
        <p>replyid (主鍵)</p>
      </td>
      <td>
        <p>int(11)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>reviewer</p>
      </td>
      <td>
        <p>varchar(15)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>replydecision</p>
      </td>
      <td>
        <p>varchar(20)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>replycontent</p>
      </td>
      <td>
        <p>varchar(1000)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>replypath</p>
      </td>
      <td>
        <p>varchar(100)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>managerreply</p>
      </td>
      <td>
        <p>varchar(10)</p>
      </td>
      <td>
        <p>是</p>
      </td>
      <td>
        <p>NULL</p>
      </td>
      <td></td>
    </tr>
  </tbody>
</table>

<h5>user</h5>
<table>
  <tbody>
    <tr>
      <td>
        <p>欄位</p>
      </td>
      <td>
        <p>類型</p>
      </td>
      <td>
        <p>空值</p>
      </td>
      <td>
        <p>預設值</p>
      </td>
      <td>
        <p>備註</p>
      </td>
    </tr>

    <tr>
      <td>
        <p>userid (主鍵))</p>
      </td>
      <td>
        <p>int(11)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>username</p>
      </td>
      <td>
        <p>varchar(10)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>auth</p>
      </td>
      <td>
        <p>varchar(3)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>profession</p>
      </td>
      <td>
        <p>varchar(100)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>email</p>
      </td>
      <td>
        <p>varchar(65)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>phone</p>
      </td>
      <td>
        <p>varchar(20)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>
        <p>password</p>
      </td>
      <td>
        <p>varchar(30)</p>
      </td>
      <td>
        <p>否</p>
      </td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

