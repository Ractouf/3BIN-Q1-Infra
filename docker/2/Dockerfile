FROM mcr.microsoft.com/dotnet/sdk:3.1 AS build-env
WORKDIR /WebApplication2

# Copy everything
COPY ./WebApplication2 ./
# Restore as distinct layers
RUN dotnet restore
# Build and publish a release
RUN dotnet publish -c Release -o out

# Build runtime image
FROM mcr.microsoft.com/dotnet/aspnet:3.1

COPY --from=build-env /WebApplication2/out .

ENTRYPOINT ["dotnet", "WebApplication2.dll"]
