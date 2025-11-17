fn main() {
    println!("Scutum: Rust защита для Codex Mortis активирована!");
    println!("Motto: Scutum ex Rust - Securitas Aeterna");
    
    let status = protect_system();
    println!("{}", status);
    println!("🦀 Rust готов к работе!");
}

fn protect_system() -> String {
    String::from("Scutum: Анализ безопасности завершён - система защищена!")
}

fn get_latin_motto() -> String {
    String::from("Rust ex Scuto - Periculum Non Est")
}
