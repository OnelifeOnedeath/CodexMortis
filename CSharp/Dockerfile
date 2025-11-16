FROM mcr.microsoft.com/dotnet/sdk:8.0 AS build
WORKDIR /src
COPY . .
RUN dotnet build -c Release

CMD ["dotnet", "run", "--project", "Gladius.csproj"]
