using CodexMortis.Core.Interfaces;

namespace CodexMortis.Core.Services
{
    public class CoreEngine : ICoreService
    {
        public string GetManifesto() => "CODEX MORTIS - Unus Vita, Unus Mors, Decem Linguae";
        
        public void InitializeChaos() 
        {
            // Хаос инициализирован!
        }
        
        public string ExecuteCommand(string command) => $"Gladius выполняет: {command}";
    }
}
