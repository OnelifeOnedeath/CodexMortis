namespace CodexMortis.Core.Models
{
    public class Manifesto
    {
        public string Title { get; } = "Codex Mortis";
        public string LatinMotto { get; } = "Unus Vita, Unus Mors, Decem Linguae";
        public string[] Languages { get; } = {
            "C#", "Python", "Go", "Rust", "Java", 
            "JavaScript", "PHP", "Swift", "Kotlin", "Bash"
        };
    }
}
