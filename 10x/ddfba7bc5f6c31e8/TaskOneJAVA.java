import java.math.BigInteger;
import java.util.HashMap;
import java.util.Map;
import java.util.Iterator;

class TaskOneJAVA
{

    public static long factorial(int n) {
        if( n == 1)
        {
            return 1;
        }
        else
            return factorial( n - 1 ) * ( n );
    }
    public static void main(String[] args)
    {
        long result = 1;
        long subSum = 1;
        long upperSum = 1;
        int sum = 0;

        

        System.out.println("Hi there!");

        String stringToSplit = "abcdefghijklmnopqrstuvwxyz";
        String[] tempArray;
 
        /* delimiter */
        String delimiter = "";
 
        tempArray = stringToSplit.split(delimiter);
 
        HashMap<String, Integer> repetitions = new HashMap<String, Integer>();

        for (int i = 0; i < tempArray.length; ++i) {
            String item = tempArray[i];

            if (repetitions.containsKey(item))
                repetitions.put(item, repetitions.get(item) + 1);
            else
                repetitions.put(item, 1);
        }


        for (Map.Entry<String, Integer> e : repetitions.entrySet()) {
            System.out.println(e.getKey() + " = " + e.getValue());
            subSum *= factorial( e.getValue() );

            sum += e.getValue();
        }

        upperSum = factorial(sum);

        System.out.println(upperSum/subSum);
    }
}