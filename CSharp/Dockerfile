FROM mcr.microsoft.com/dotnet/sdk:8.0
WORKDIR /app
COPY . .
RUN dotnet build Gladius.sln
CMD ["dotnet", "run", "--project", "Gladius.sln"]
