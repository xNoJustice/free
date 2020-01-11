package radio;

public class Radio {

    public static void main(String[] args) {
        RadioClass Asus = new RadioClass(50,0);
        Asus.OnOff();
        Asus.VolDown();
        Asus.VolDown();
        Asus.VolDown();
    }
    
}

//////////////////////////////////////////////////////////////////

package radio;

public class RadioClass {
    Boolean power = false;
    final int VolStep = 5;
    final int  MaxVol;
    final int MinVol;
    int NowVol = 13;
    int OldVol = 0;
    final double MaxFreq = 108.0;
    final double MinFreq = 87.5;
    final double FreqStep = 0.2;
    double NowFreq = 88.6;
    RadioClass(int a, int b)
    {
        MaxVol = a;
        MinVol = b;
    }
    
    void OnOff ()
    {
        if (power == false)
        {
            power = true;
            System.out.println("Radyo Açıldı");
            System.out.println("Şimdiki ses miktarı = " + NowVol);
        }
        else
        {
            power = false;
            System.out.println("Radyo Kapandı");
        }
    }
    void VolUp()
    {
        if (power==false)
        {
            System.out.println("Radyo Kapalıyken Ses Artırılamaz!");
        }
        else
        {
            if (NowVol+VolStep > MaxVol){
                NowVol = MaxVol;
                System.out.println("Ses Miktarı Artırıldı. Max Ses Miktarına Ulaştınız");
               
            }else{
                NowVol = NowVol + VolStep;
                System.out.println("Ses Miktarı Artırıldı. Şuanki Ses Miktarı = " + NowVol);
            }
        }
    }
    void VolDown()
    {
        if (power==false)
        {
            System.out.println("Radyo Kapalıyken Ses Azaltılamaz!");
        }
        else
        {
            if (NowVol-VolStep < MinVol){
                NowVol = MinVol;
                System.out.println("Ses Miktarı Azaltıldı. Min Ses Miktarına Ulaştınız = " + NowVol);
               
            }else{
                NowVol = NowVol - VolStep;
                System.out.println("Ses Miktarı Azaltıldı. Şuanki Ses Miktarı = " + NowVol);
            }
        }
    }
    void Mute()
    {
        if (power==false)
        {
            System.out.println("Radyo Kapalıyken Mute Yapılamaz!");
        }
        else 
        {
            if(NowVol != 0)
            {
                OldVol = NowVol;
                NowVol = MinVol;
                System.out.println("Mute Başarılı. Şuanki Ses Miktarı = " + NowVol + " Oldu."); 
            }
            else
            {
                NowVol = OldVol;
                System.out.println("Ses Seviyesi Eski Haline Geri Döndü. Şuanki Ses Miktarı = " + NowVol);
            }
            
        }
    }
    void FreqUp()
    {
        if (power==false)
        {
            System.out.println("Radyo Kapalıyken Frekans Artırılamaz!");
        }
        else
        {
            if (NowFreq + FreqStep > MaxFreq){
                NowFreq = MinFreq;
                System.out.println("Frekans Miktarı Artırıldı. Min Frekans miktarına ulaştınız");
               
            }else{
                NowFreq = NowFreq + FreqStep;
                System.out.println("Frekans Miktarı Artırıldı. Şuanki Frekans Miktarı = " + NowFreq);
            }
        }
    }
    void FreqDown()
    {
        if (power==false)
        {
            System.out.println("Radyo Kapalıyken Frekans Azaltılamaz!");
        }
        else
        {
            if (NowFreq - FreqStep < MinFreq){
                NowFreq = MaxFreq;
                System.out.println("Frekans Miktarı Azaltıldı. Max Frekans Miktarına Yükseltildi");
               
            }else{
                NowFreq -= FreqStep;
                System.out.println("Frekans Miktarı Azaltıldı. Şuanki Frekans Miktarı = " + NowFreq);
            }
        }
    }
}
