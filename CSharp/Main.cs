using System;
using CodexMortis.Core.Services;

class Program
{
    static void Main()
    {
        Console.WriteLine("🏛️ Gladius: C# ядро Codex Mortis работает!");
        Console.WriteLine("⚡ Unus Vita, Unus Mors, Decem Linguae!");
        
        var engine = new CoreEngine();
        Console.WriteLine(engine.GetManifesto());
        Console.WriteLine($"System ready: {engine.IsSystemReady()}");
    }
}
