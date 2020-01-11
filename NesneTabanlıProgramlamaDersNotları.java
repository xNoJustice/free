 /* En Basit Yapı */
package firstjavaprogram;

public class FirstJavaProgram
{
   public static void Main(String[] args)
   {

   }
}

/* Tanımlamalar ve maths kullanımı */

package firstjavaprogram;
import java.math.*;

public class FirstJavaProgram
{
   public static void Main(String[] args)
   {
        double a = 10;
        double b = 20;
        double c = a + b;
        String k = 'Hüseyin';
        System.out.println("Sonuç = " + c);
        System.out.println("Sonuç = " + c + " " + k);
        System.out.println(c);
        System.out.println("Sonuç = " + a + b);
        System.out.println(a+b);
        System.out.println(a++);
        System.out.println(++a);
        System.out.println(a);

        int sayi1 = 50;
        int sayi2 = 60;
        int sayi3 = 180 - (50+60);
        System.out.println("3.Kenar = " + sayi3);

        double num1 = 5;
        double num2 = 7;
        double num3 = 2;
        double delta = (num2*2) - (4*num1*num3);
        /* if yapısı */
        if (delta > 0)
        {
             double k1 = (-num2 + math.sqrt(delta)) / (2*num1); 
             double k2 = (-num2 - math.sqrt(delta)) / (2*num1);
             System.out.println("1.Kök = " + k1 + " , " + "2.Kök = " + k2); )
        }else if ()
        {
             double k3 = -num2 / (2*num1);
             System.out.println("Çözüm Kümesi = " + k3);
        }else
        { 
             System.out.println("Çözüm Kümesi Yok");
        }

   }
}
/* Kullanıcıdan veri alma ve kullanımı */
package firstjavaprogram;
import java.util.Scanner; /* gerekli kütüphane */

public class FirstJavaProgram
{
   public static void Main(String[] args)
   {
       Scanner read = new Scanner(System.in);
      System.out.println("Lütfen üçgenin ilk açısını giriniz = ");
      int A = read.nextInt;
      System.out.println("Lütfen üçgenin ikinci açısını giriniz = ");
      int B = read.nextInt;
      System.out.println("Lütfen üçgenin üçüncü açısını giriniz = ");
      int C = read.nextInt;
      int toplam = A + B + C;
      if(toplam > 180){
           System.out.println("İç açılar toplamı 180'den büyük olamaz");
      }else if(toplam < 180){
           System.out.println("İç açılar toplamı 180'den küçük olamaz");
      }else{
           System.out.println("İç açılar toplamı = " + toplam);
      }
      
      System.out.println("Lütfen üçgenin A kenarının cm cinsinden uzunluğunu giriniz = ");
      int D = read.nextInt;
      System.out.println("Lütfen üçgenin B kenarının cm cinsinden uzunluğunu giriniz = ");
      int E = read.nextInt;
      System.out.println("Lütfen üçgenin C kenarının cm cinsinden uzunluğunu giriniz = ");
      int F = read.nextInt;
      System.out.println("Lütfen alan hesabı için yüksekliği cm cinsinden giriniz = ");
      int G = read.nextInt;
      int top = D + E + F;
      int alan = (D * G) / 2;
      System.out.println("Üçgenin çevresi = " + top + " cm'dir.");
      System.out.println("Üçgenin alanı = " + alan + " cm²'dir.");
      /* Fonksiyonlar */
      /* Fonksiyon Kullanımı */
      UcgenCevre(10,20,30);
   }
   static void UcgenCevre(int x, int y, int z){
       int top = x+y+z;
       System.out.println("Üçgenin çevresi = " + top + " cm'dir.");
   }

}
