# GIT TR

### Github Config Ayarları

**Name Ayarlama**
``` git config --global user.name "user.name" ``` <br />

**Email Ayarlama**
``` git config --global user.mail "user.email" ``` <br />

### Console Komutları

**Klasördeki Dosyaları Listeleme**
``` ls ``` <br />

**Belirtilen Uzantıya Gitme**
``` cd klasör_adı ``` <br />

**Dosya Oluşturma**
``` touch dosya_adı ``` <br />

**Visual Code'da Dosya Açma/Oluşturma**
``` code dosya_adı ``` <br />

**Dosya/Klasör Silme**
``` git rm -r dosya_adı/klasör_adı ``` <br />

### Github Komutları

**Klasörü Local Repository Yapma**
``` git init ``` <br />

**Bir Repository'i Kopyalama**
``` git clone <link> ``` <br />

**Dosyayı/Dosyaları Staging'e Taşıma**
``` git add dosya_adı / git add . (Hepsini Alır)``` <br />

**Git Durumunu Gösterme (Şuanki)**
``` git status ``` <br />

**Dosyayı/Dosyaları Head'e Taşıma**
``` git commit -m "Commit Mesajı" ``` <br />

**Remote Repository'e Bağlanma (Eğer Local Repository Kullanıyorsanız)**
``` git remote add origin <link>``` <br />

**Yeni Branch Oluşturma**
``` git checkout -b <branch_adı> ``` <br />

**Başka Bir Branch'a Geçme**
``` git checkout <branch_adı> ``` <br />

**Tüm Branchları Listeleme**
``` git branch ``` <br />

**Branch Silme**
``` git branch -d <branch_adı> ``` <br />

**Tüm Branchları Repository'e Gönderme**
``` git push --all origin ``` <br />

**Tüm değişiklikleri Remote Repository'e Gönderme**
``` git push origin <branch_adı> / git push ``` <br />

**Repository'deki Bir Branch'ı Silme**
``` git push origin :<branch_adı> ``` <br />

**Repository'deki Değişiklikleri Çekme / Localdekiyle Birleştirme**
``` git pull ``` <br />

**Şuanki Branch İle Başka Branch Birleştirme**
``` git merge <branch_adı> ``` <br />

**Birleştirmede Tüm Dosya Çakışmalarını Gösterme**
``` git diff ``` <br />

**Birleştirmede Bir Dosyadaki Farklılıkları Gösterme**
``` git diff --base <dosya_adı> ``` <br />

**Birleştirmeden Önce Değişiklikleri Gösterme**
``` git diff <ilk_branch> <ikinci_branch> ``` <br />

**Bir Commit'e Tag Atama**
``` git tag 1.0.0 <commit_id> ``` <br />

**Tüm Tagleri Repository'e Gönderme**
``` git push --tags origin ``` <br />

**Localdaki Değişiklikleri Geri Alma (Yeni Dosyalar Silinmez)**
``` git checkout -- <dosya_adı> ``` <br />

**Localdaki Tüm Değişiklikleri Geri Alma**
``` git fetch origin / git reset --hard origin/master ``` <br />
