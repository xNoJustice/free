package javaapplication2;

public class JavaApplication2 {
    // 3 sayiyi karsilastir ve sirala
    static void Karsilastir(int s1, int s2, int s3){
        if(s1 > s2 && s1 > s3){
            if(s2 > s3){
                System.out.println(s1 + " > " + s2 + " > " + s3 );
            }else if(s3 > s2){
                System.out.println(s1 + " > " + s3 + " > " + s2 );
            }
        }else if(s2 > s1 && s2 > s3){
            if(s1 > s3){
                System.out.println(s2 + " > " + s1 + " > " + s3 );
            }else if(s3 > s1){
                System.out.println(s2 + " > " + s3 + " > " + s1 );
            }
        }else{
            if(s2 > s1){
                System.out.println(s3 + " > " + s2 + " > " + s1 );
            }else if(s1 > s2){
                System.out.println(s3 + " > " + s1 + " > " + s2 );
            }
        }
            
    }
    // Dizinin eleman sayisi kadar döngü kurdurup karsilastirip siralat
    static void Karsilastirma(int[] num){
       int len = num.length;
       int tmp;
       for(int i=0; i < len-1; i++){
           for (int j=0; j < len-1; j++){
            if(num[j+1] > num[j]){
                tmp = num[j+1];
                num[j+1] = num[j];
                num[j] = tmp;
            }   
           }
            
       }
       for (int l=0; l < num.length; l++){
            System.out.println(num[l]);
        }
    }
    public static void main(String[] args) {
        Karsilastir(10,20,30);
        int[] num = {10,20,30,40,50,60,70,80,90,100};
        Karsilastirma(num);
    }
    
}
