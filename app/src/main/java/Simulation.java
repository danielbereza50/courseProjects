
/*
 * Name: Maurice Kitson / Daniel Bereza 
 * Class: A.I. / Dr. Z
 * Date: 05/06/2016
 * Assignment: Final Project
 */

import java.util.Collections;
import java.util.Vector;
import java.lang.Comparable;

public class Simulation {
    private static int NUM_CHROMOSOMES = 10;
    private static int MAX_POWER = 10;
    private static int MAX_NUMBER = (int) Math.pow(2, MAX_POWER) - 1;
    private static int FITNESS_THRESHOLD = 5;
    private static float MUTATE = (float) .05;
    private Vector population;
    private boolean done = true;
    int numRuns = 0;

    public Simulation(){
        generateRandomPopulation();
    }

    // Initialize the population with random bits.
    private void generateRandomPopulation(){
        System.out.println("***Randomly Generating population with: " + NUM_CHROMOSOMES + " Chromosome(s)***");
        population = new Vector();
        for(int i = 0; i < NUM_CHROMOSOMES; ++i){
            int randomValue = (int)(Math.random()*MAX_NUMBER);
            population.add(new Chromosome(randomValue, MAX_POWER));
        }
        System.out.println("First Population: " + population +"\n");
    }

    /*
    --------------------------------------------------------------------
    Function for calculating the fitness.
    --------------------------------------------------------------------
     */  
    // the start of the selection process that outputs candidates with associated fitness levels
    public void start(){
        Collections.sort(population);
        Chromosome fitess = (Chromosome) population.lastElement();
        done = fitess.fitness() >= MAX_POWER? true:false;
        if(done){
            System.out.println("DONE, solution found: " + fitess);	
        }else{
            numRuns++;
            System.out.println("FITNESS: " + fitess + " fitness: " + fitess.fitness());
            generateNewPopulation();
            start();
        }
    }

    // generates a new population pool
    private void generateNewPopulation(){
        System.out.println("***Generating New Population");
        Vector temp = new Vector();
        for(int i = 0; i < population.size()/2; ++i){
            Chromosome p1 = selectParent();
            Chromosome p2 = selectParent();
            temp.add(cross1(p1, p2));
            temp.add(cross2(p1, p2));
        }
        population.clear();
        population.addAll(temp);
        System.out.println("New Population: " + population + "\n");
    }

    /*
    --------------------------------------------------------------------
    Selection of the best individuals from the population.
    --------------------------------------------------------------------
     */  
    private Chromosome selectParent(){
        int delta = population.size();
        delta = (NUM_CHROMOSOMES) - (NUM_CHROMOSOMES/2);
        int num = (int)(Math.random()*10 + 1);
        int index;
        if(num >= 4){
            index = (int)(Math.random()*delta + NUM_CHROMOSOMES/2);
        }else{
            index = (int)(Math.random()*delta);	
        }
        return (Chromosome) population.get(index);
    }

    /*
    Do cross-over of two individuals. The following diagram should help.

                       1       2       3                           *B*  
         +---------------------------------------------------------------+
    parent1:   |   1   |   2   |   3   |    |     |     |   |  *B*  |
         +---------------------------------------------------------------+

                       1       2       3                           *B*  
         +---------------------------------------------------------------+
    parent1:   |   1   |   2   |   3   |    |     |     |   |  *B*  |
         +---------------------------------------------------------------+
     */

    // the first crossover point in the selection process
    private Chromosome cross1(Chromosome parent1, Chromosome parent2){
        String bitS1 = parent1.getBitString();
        String bitS2 = parent2.getBitString();
        int length = bitS1.length();
        String newBitString = bitS1.substring(0, length/2) + bitS2.substring(length/2, length);
        Chromosome offspring = new Chromosome();
        offspring.setBitString(newBitString);
        if(shouldMutate()){
            mutate(offspring);
        }
        return offspring;
    }

    private Chromosome cross2(Chromosome parent1, Chromosome parent2){
        String bitS1 = parent1.getBitString();
        String bitS2 = parent2.getBitString();
        int length = bitS1.length();
        String newBitString = bitS2.substring(0, length/2) + bitS1.substring(length/2, length);
        Chromosome offspring = new Chromosome();
        offspring.setBitString(newBitString);
        if(shouldMutate()){
            mutate(offspring);
        }
        return offspring;
    }

    // determines if the 2 parents should mate based on their traits
    private boolean shouldMutate(){
        double num = Math.random();
        int number = (int) (num*100);
        num = (double) number/100;
        return (num <= MUTATE);
    }

    /*
    --------------------------------------------------------------------
    Mutation operator.
    --------------------------------------------------------------------
     */  
    // this is where the chromosones mutate producing a population closer to the desired state
    private void mutate(Chromosome offspring){
        String s = offspring.getBitString();
        int num = s.length();
        int index = (int) (Math.random()*num);
        String newBit = flip(s.substring(index, index + 1));
        String newBitString = s.substring(0, index) + newBit + s.substring(index + 1, s.length());
        offspring.setBitString(newBitString);
    }

    /* Randomly select a bit and flip it. This is different from 
    selecting a bit, and then randomly filling that bit location
    with a 1 or 0 ! The population is considered to be 
    a linear sequence of bits.*/
    private String flip(String s){
        return s.equals("0")? "1":"0";
    }

    /*
    --------------------------------------------------------------------
    Testing of the Genetic Algorithm
    --------------------------------------------------------------------
     */

    //Main function for initializing the global variables and
    //parameters, and also for starting the train and test processes.
    public static void main(String[] args) {
        double average = 0;
        int sum = 0;
        for(int i = 0; i < 10; ++i){
            Simulation s = new Simulation();
            s.start();
            sum = sum + s.numRuns;
            average = (double)sum / (double)(i + 1); 
            System.out.println("Number of runs: " + s.numRuns);
        }
        System.out.println("average runs: " + average);
    }
} 

class Chromosome implements Comparable{
    protected String bitString;

    public Chromosome(){
    }

    public Chromosome(int value, int length){
        bitString = convertIntToBitString(value, length);
    }
    
    // an accessor to get the bit string
    public void setBitString(String s){
        bitString = s;
    }

    // retrieves the bit string of the chromosome
    public String getBitString(){
        return bitString;
    }

    public int compareTo(Object o) {
        Chromosome c = (Chromosome) o;
        int num = countOnes(this.bitString) - countOnes(c.getBitString()); 
        return num;
    }

    // fitness is determined by the number of ones in the binary expansion 
    public int fitness(){
        return countOnes(bitString);
    }

    public boolean equals(Object o){
        if(o instanceof Chromosome){
            Chromosome c = (Chromosome) o;
            return c.getBitString().equals(bitString);
        }
        return false;
    }

    public int hashCode(){
        return bitString.hashCode();
    }

    // displays the bitstring of the ideal individual 
    public String toString(){
        return "Chromosome: " + bitString;
    }

    // count the number of ones in the binary expansion 
    public static int countOnes(String bits){
        int sum = 0;
        for(int i = 0; i < bits.length(); ++i){
            String test = bits.substring(i, i + 1);
            if(test.equals("1")){
                sum = sum + 1;
            }
        }
        return sum;
    }

    //converts number from base 10 decimal to base 2 binary 
    public static String convertIntToBitString(int val, int length){
        int reval = val;
        StringBuffer bitString = new StringBuffer(length);
        for(int i = length - 1; i >= 0; --i){
            if(reval - (Math.pow(2, i)) >= 0){
                bitString.append("1");
                reval = (int)(reval - Math.pow(2, i));
            }else{
                bitString.append("0");
            }
        }
        return bitString.toString();
    }

    public static void main(String[] args){
        Chromosome c = new Chromosome(1234, 10);
        System.out.println(c.fitness());
    }
} 
