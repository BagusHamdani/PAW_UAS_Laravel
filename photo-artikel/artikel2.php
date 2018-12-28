import java.util.*;
import java.io.*;
class FlightInfo {
  String from;
  String to;
  int distance;
  boolean skip; 
  FlightInfo(String f, String t, int d) {
    from = f;
    to = t;
    distance = d;
    skip = false;
  }
}

public class UAS {
  final int MAX = 100; 
  FlightInfo flights[] = new FlightInfo[MAX];
  int numFlights = 0; 
  Stack btStack = new Stack(); 

  public static void main(String args[]) {
    String to, from;
    Depth ob = new Depth();
    BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
	
	System.out.println("======================================");
	System.out.println("           Daftar Nama Kota           ");
	System.out.println("======================================");
	System.out.println(" -  Jakarta");
    System.out.println(" -  Bandung");
    System.out.println(" -  Tasik");
    System.out.println(" -  Nagrek");
    System.out.println(" -  Palimanan");
    System.out.println(" -  Sumedang");
    System.out.println(" -  Cianjur");
    System.out.println(" -  Ciamis");
	System.out.println(" -  Banjar");
	System.out.println(" -  Kanci");
	System.out.println(" -  Wangon");
	System.out.println(" -  Cikampek (tol)");
	System.out.println(" -  Bandung (tol)");
	System.out.println("======================================");
	System.out.println("        Daftar Jarak Antar Kota       ");
	System.out.println("======================================");
	System.out.println("1.  Jakarta   -> Cianjur        = 114");
    System.out.println("2.  Bandung   -> Ciamis         = 115");
    System.out.println("3.  Tasik	  -> Banjar         = 42");
    System.out.println("4.  Nagrek    -> Tasik          = 66");
    System.out.println("5.  Palimanan -> Kanci          = 27");
    System.out.println("6.  Bandung   -> Sumedang       = 13");
    System.out.println("7.  Sumedang  -> Palimanan      = 71");
    System.out.println("8.  Bandung   -> Nagrek         = 32");
    System.out.println("9.  Cianjur   -> Bandung        = 59");
    System.out.println("10. Ciamis    -> Wangon         = 116");
    System.out.println("11. Jakarta   -> Cikampek (tol) = 73");
	System.out.println("12. Jakarta   -> Bandung (tol)  = 146");
	System.out.println("13. Tasik     -> Ciamis         = 17");
	System.out.println("======================================");
    ob.setup();

    try {
      System.out.print("Kota Asal   : ");
      from = br.readLine();
      System.out.print("Kota Tujuan : ");
      to = br.readLine();

      ob.isflight(from, to);

      if (ob.btStack.size() != 0)
        ob.route(to);
    } catch (IOException exc) {
      System.out.println("Error on input.");
    }
  }

  void setup() {
    addRute("Jakarta", "Cianjur", 114);
    addRute("Bandung", "Ciamis", 115);
    addRute("Tasik", "Banjar", 42);
    addRute("Nagrek", "Tasik", 66);
    addRute("Palimanan", "Kanci", 27);
    addRute("Bandung", "Sumedang", 13);
    addRute("Sumedang", "Palimanan", 71);
    addRute("Bandung", "Nagrek", 32);
    addRute("Cianjur", "Bandung", 59);
    addRute("Ciamis", "Wangon", 116);
    addRute("Jakarta", "Cikampek (tol)", 73);
	addRute("Jakarta", "Bandung (tol)", 146);
	addRute("Tasik", "Ciamis)", 17);
  }
  void addRute(String from, String to, int dist) {
    if (numFlights < MAX) {
      flights[numFlights] = new FlightInfo(from, to, dist);
      numFlights++;
    } else
      System.out.println("Flight database full.\n");
  }
  void route(String to) {
    Stack rev = new Stack();
    int dist = 0;
    FlightInfo f;
    int num = btStack.size();

    for (int i = 0; i < num; i++)
      rev.push(btStack.pop());

    for (int i = 0; i < num; i++) {
      f = (FlightInfo) rev.pop();
      System.out.print(f.from + " -> ");
      dist += f.distance;
    }

    System.out.println(to);
    System.out.println("Jaraknya Adalah " + dist);
  }

  int match(String from, String to) {
	for (int i = numFlights-1; i>-1; i--) {
      if (flights[i].from.equals(from) && flights[i].to.equals(to)
          && !flights[i].skip) {
        flights[i].skip = true; 
        return flights[i].distance;
      }
    }

    return 0; 
  }
  FlightInfo find(String from) {
    for (int i = 0; i < numFlights; i++) {
      if (flights[i].from.equals(from) && !flights[i].skip) {
        FlightInfo f = new FlightInfo(flights[i].from, flights[i].to,
            flights[i].distance);
        flights[i].skip = true; 

        return f;
      }
    }

    return null;
  }
  void isflight(String from, String to) {
    int dist;
    FlightInfo f;
    dist = match(from, to);
    if (dist != 0) {
      btStack.push(new FlightInfo(from, to, dist));
      return;
    }
    f = find(from);
    if (f != null) {
      btStack.push(new FlightInfo(from, to, f.distance));
      isflight(f.to, to);
    } else if (btStack.size() > 0) {
      f = (FlightInfo) btStack.pop();
      isflight(f.from, f.to);
    }
  }
}