
public class BurgerKing {


    public static int calculateMaxProfit(int breads, int vegPattice, 
    int nonVegPattice, int tikkiPattice, int priceVegBurger, 
    int priceNonVegBurger, int priceTikkiBurger) {

        int ans = 0;
        int MaxBurger = (int) Math.floor(breads/2);
        
        for(int i=0; i<MaxBurger; i++) {
        	
        	if ((priceVegBurger >= priceNonVegBurger && priceVegBurger >= priceTikkiBurger) && vegPattice > 0){

                ans += priceVegBurger*vegPattice;
                vegPattice = 0;
                priceVegBurger = 0;

            }else if ((priceNonVegBurger >= priceVegBurger && priceNonVegBurger >= priceTikkiBurger) && nonVegPattice > 0 ){

            	ans += priceNonVegBurger*nonVegPattice;
            	nonVegPattice = 0;
            	priceNonVegBurger = 0;

            }else{
            	
            	ans += priceTikkiBurger*tikkiPattice;
            	tikkiPattice = 0;
            	priceTikkiBurger = 0;
            	
            }
        	
        	
        	
        }
        
     

        return ans;
    
    
    }


   public static void main(String[] args) {
	   
        int breads = 15;
        int vegPattice = 3;
        int nonVegPattice = 2;
        int tikkiPattice = 1;
        int priceVegBurger = 100;
        int priceNonVegBurger = 125;
        int priceTikkiBurger = 112;

        int maxProfit = calculateMaxProfit(breads, vegPattice, nonVegPattice, tikkiPattice, priceVegBurger, priceNonVegBurger, priceTikkiBurger);
        System.out.println("Maximum Profit: $" + maxProfit);

    }

    
}


