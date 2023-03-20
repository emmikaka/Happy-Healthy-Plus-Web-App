# Happy Healthy Plus Web App
 เป็นเว็บไซต์ที่ช่วยในการคำนวณค่า bmi หรือค่าดัชนีมวลกาย <br>
 โดยใช้ 
 * php เป็น backend <br>
 * nginx เป็น web server หลัก <br>
 * mysql, phpmyadmin เป็น database <br>
 
 ## สมาชิก
 * นางสาวศิรินภา ไชยสิทธ์ รหัส 623040634-3
 * นางสาวอลิศา ฉัตรชูเกียรติกุล รหัส 623040660-2
 * นางสาวเอมมิกา กางกรณ์ รหัส 623040665-2
 
 ## Project นี้จัดทำขึ้นเพื่อ เรียนรู้การใช้งาน docker
 
``` java 
.
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
|  |  |__ ฺBMI.sql
|  |__ backup/
|__ php/
   |__ Dockerfile
```   

## รัน Container ด้วย docker-compose 
``` java
docker-compose up -d
```


## ดู Containers ที่รันทั้งหมด ตามที่ docker-compose.yml ดูแล
``` java
docker-compose ps
```
![image](https://user-images.githubusercontent.com/58929525/226402026-abea3121-1c7b-46e4-a3ef-dd2167bf3b69.png)
 หรือ 
 ``` java
docker container ls
```
![image](https://user-images.githubusercontent.com/58929525/226402120-4d03cd53-4efc-49c4-9279-03d82ef66927.png)

load Happy-Healthy-Plus-Web-App  http://localhost:8000/ in your browser.
![image](https://user-images.githubusercontent.com/58929525/225968624-386991a1-ef50-43ee-977b-79e8827f53b4.png)

load phpmyadmin load http://localhost:8080/

## ตรวจสอบ network
*  
``` java
docker network ls
```
![image](https://user-images.githubusercontent.com/58929525/226402382-5203b889-0f27-44d7-8e5f-8b1ffddc5c73.png)


* หากต้องการตรวจสอบว่า container ที่เรา run เชื่อมกับ container ของ database ได้หรือไม่ให้เรา exec เข้าไปใน container phpfpm เพื่อ ping container db ซึ่งเราจั้งชื่อว่า web_php เราตั้งชื่อ services ว่า db

``` java
docker exec -it web_php sh
```

เมื่อเข้าไปใน container แล้วสามารถ ping db ได้
``` java
ping db
```
![image](https://user-images.githubusercontent.com/58929525/226402518-4ca034c6-084b-493c-a219-6f99a09e5750.png)



## Shutdown
``` java
docker-compose down
```
![image](https://user-images.githubusercontent.com/58929525/226402679-9347d7e7-f827-474b-90ba-e508c4c40eda.png)


## Stop/Delete Container ที่ docker-compose.yml ดูแล และลบ image ทั้งหมดด้วย
ด้วยคำสั่ง 
``` java
docker-compose down --rmi all
```
