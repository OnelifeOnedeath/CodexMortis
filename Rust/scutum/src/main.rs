fn main() {
    println!("Scutum: Rust защита для Codex Mortis активирована!");
    println!("Motto: Scutum ex Rust - Securitas Aeterna");
    
    match protect_system() {
        true => println!("🛡️ Система защищена!"),
        false => println!("⚠️ Ошибка защиты!")
    }
}

fn protect_system() -> bool {
    println!("Scutum: Анализирую безопасность...");
    true
}

fn get_latin_motto() -> String {
    String::from("Rust ex Scuto - Periculum Non Est")
}
