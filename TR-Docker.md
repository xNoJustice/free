# Docker TR

## Docker Build
**Docker Image Build Etme :**
```docker build . ``` <br />

**Docker Image Build'e Isim Verme :**
```docker build . -t (name) ``` <br />

## Docker General

**Docker Image List :**
```docker images ``` <br />

**Docker Container List :**
```docker ps ``` <br />

**Docker Container List All :**
```docker ps -a ``` <br />

**Docker Pull Image :**
```docker pull (image) (Ornek : docker pull ubuntu)``` <br />

**Docker Run Image :**
```docker run (image) (Ornek : docker run ubuntu)``` <br />

**Docker Ubuntu Bash Erişim :**
```docker run -it ubuntu ``` <br />

**Docker Start/Stop **
```docker start (image_name) / docker run --name (name) (image) / docker stop (container_name/container_id) ``` <br />

**Docker Ustünde Bir Container'a Dışardan Erişme (Port Ayarlama) :**
```docker run -p Dış_Port:Ic_Port mongo (Örnek : docker run -p 27017:27017 mongo) ``` <br />

**Docker Image/Container Silme :**
```docker rm (image/container_name/container_id)  ``` <br />

**Docker Tüm Container'ları Silme (Aktif Olmayanlar) :**
```docker rm $(docker container ls -aq) ``` <br />

**Docker None Images Silme :**
```docker rmi $(docker images -f “dangling=true” -q) ``` <br />

**Docker Arka Planda Image Çalıştırma :**
```docker run -d (image_name) ``` <br />

**Docker Arka Plandaki Container'ı Aktif Yapma :**
```docker attach (container_name/container_id) ``` <br />

**Docker Container Log'a Erişme :**
```docker container logs (container_name/container_id) ``` <br />

**Docker'da Volume Oluşturma :**
```docker run -v Bizdeki_klasör:Containerdeki_klasör mongo (Örnek : docker run -v /opt/data:/data/db mongo) ``` <br />

## Docker MySQL

**Docker MySQL Erişim :**
```docker exec -it _container_name_ bash ``` <br />
**MySQL Bash Login :**
```mysql -uroot -ppassword```
