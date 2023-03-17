# Happy Healthy Plus Web App
 เป็นเว็บไซต์ที่ช่วยในการคำนวณค่า bmi หรือค่าดัชนีมวลกาย <br>
 โดยใช้ 
 * php เป็น backend <br>
 * nginx เป็น web server หลัก <br>
 * mysql, phpmyadmin เป็น database <br>
 
 ## Project นี้จัดทำขึ้นเพื่อ เรียนรู้การใช้งาน docker
 
``` java 
myweb
|__ docker-compose.yml
|__ html/
|   |__ index.php
|__ nginx
|  |__ conf/
|  |  |__ nginx.conf
|  |__ conf.d/
|     |__ default.conf
|__ mariadb/
|  |__ data/
|  |__ initdb/
|  |  |__ tinanic.sql
|  |__ backup/
|__ php/
   |__ Dockerfile
```   
   
## รัน Container ด้วย docker-compose 
``` java
docker-compose up -d
```

load Happy-Healthy-Plus-Web-App  http://localhost:8000/ in your browser.
![image](https://user-images.githubusercontent.com/58929525/225968624-386991a1-ef50-43ee-977b-79e8827f53b4.png)

load phpmyadmin load http://localhost:8080/

