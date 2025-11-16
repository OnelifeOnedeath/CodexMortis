namespace CodexMortis.Core.Interfaces
{
    public interface ICoreService
    {
        string GetManifesto();
        void InitializeChaos();
        bool IsSystemReady();
    }
}
