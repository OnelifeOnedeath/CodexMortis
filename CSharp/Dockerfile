FROM mcr.microsoft.com/dotnet/sdk:8.0
WORKDIR /app
COPY . .
RUN dotnet build CodexMortis.csproj
CMD ["dotnet", "run", "--project", "CodexMortis.csproj"]
