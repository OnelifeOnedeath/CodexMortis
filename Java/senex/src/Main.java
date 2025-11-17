public class Main {
    public static void main(String[] args) {
        System.out.println("Senex: Java мудрость для Codex Mortis!");
        System.out.println("Motto: Senex ex Java - Sapientia Enterprise");
        
        String status = getSystemStatus();
        System.out.println(status);
        System.out.println("☕ Java готов к работе!");
    }
    
    public static String getSystemStatus() {
        return "Senex: Enterprise система инициализирована!";
    }
    
    public static String getLatinMotto() {
        return "Java ex Senex - Ordo in Enterprise";
    }
}
