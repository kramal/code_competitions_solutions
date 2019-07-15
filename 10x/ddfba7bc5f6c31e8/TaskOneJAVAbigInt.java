import java.math.BigInteger;
import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;
import java.util.Iterator;

class TaskOneJAVAbigInt
{
    /**
     * Factorial
     * @param n
     * @return
     */
    public static BigInteger factorial(BigInteger n) {
        BigInteger result = BigInteger.ONE;
    
        while (!n.equals(BigInteger.ZERO)) {
            result = result.multiply(n);
            n = n.subtract(BigInteger.ONE);
        }
    
        return result;
    }

    /**
     * Number of permutations
     * @param line
     * @return
     */
    public static BigInteger getNumberOfPermutations(String line)
    {
        BigInteger result;
        BigInteger subSum = BigInteger.ONE;
        BigInteger upperSum = BigInteger.ONE;

        String stringToSplit = "ordeals";
        String[] tempArray;
 
        /* delimiter */
        String delimiter = "";
 
        tempArray = line.split(delimiter);
 
        HashMap<String, Integer> repetitions = new HashMap<String, Integer>();

        for (int i = 0; i < tempArray.length; ++i) {
            String item = tempArray[i];

            if (repetitions.containsKey(item))
                repetitions.put(item, repetitions.get(item) + 1);
            else
                repetitions.put(item, 1);
        }

        int sumOfElems = 0;
        for (Map.Entry<String, Integer> e : repetitions.entrySet()) {

            subSum = subSum.multiply( factorial( BigInteger.valueOf(e.getValue())) );

            sumOfElems += e.getValue();
        }

        upperSum = factorial(BigInteger.valueOf(sumOfElems));
        result = upperSum.divide(subSum);

        return result;

    }
    public static void main(String[] args)
    {

        Scanner sc = new Scanner(System.in);
        BigInteger result;
        while (sc.hasNext()) {
            String line = sc.next();
            
            result = getNumberOfPermutations(line);

            System.out.println(result);
        }

        sc.close();
    }
}