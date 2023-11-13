FROM mcr.microsoft.com/dotnet/sdk:3.1 AS build-env
WORKDIR /WebApplication2

COPY . ./
RUN dotnet restore
RUN dotnet publish -c Release -o out

FROM mcr.microsoft.com/dotnet/aspnet:3.1
WORKDIR /WebApplication2
COPY --from=build-env /WebApplication2/out .
ENTRYPOINT ["dotnet", "WebApplication2.dll"]
