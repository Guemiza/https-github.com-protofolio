"use strict";
/*---------------------------------------------------------------------------------------------
*  Copyright (c) Microsoft Corporation. All rights reserved.
*  Licensed under the MIT License. See License.txt in the project root for license information.
*--------------------------------------------------------------------------------------------*/
Object.defineProperty(exports, "__esModule", { value: true });
exports.AzExtResourceType = void 0;
/**
 * Normalized type for Azure resources that uniquely identifies resource type for the purposes
 * of the Azure extensions
 */
var AzExtResourceType;
(function (AzExtResourceType) {
    AzExtResourceType["AppServices"] = "AppServices";
    AzExtResourceType["AzureCosmosDb"] = "AzureCosmosDb";
    AzExtResourceType["ContainerApps"] = "ContainerApps";
    AzExtResourceType["ContainerAppsEnvironment"] = "ContainerAppsEnvironment";
    AzExtResourceType["FunctionApp"] = "FunctionApp";
    AzExtResourceType["PostgresqlServersFlexible"] = "PostgresqlServersFlexible";
    AzExtResourceType["PostgresqlServersStandard"] = "PostgresqlServersStandard";
    AzExtResourceType["StaticWebApps"] = "StaticWebApps";
    AzExtResourceType["StorageAccounts"] = "StorageAccounts";
    AzExtResourceType["VirtualMachines"] = "VirtualMachines";
    AzExtResourceType["ResourceGroup"] = "ResourceGroup";
    // Below are not supported but have icons in the Resources extension
    AzExtResourceType["ApiManagementService"] = "ApiManagementService";
    AzExtResourceType["ApplicationInsights"] = "ApplicationInsights";
    AzExtResourceType["AppServiceKubernetesEnvironment"] = "AppServiceKubernetesEnvironment";
    AzExtResourceType["AppServicePlans"] = "AppServicePlans";
    AzExtResourceType["AvailabilitySets"] = "AvailabilitySets";
    AzExtResourceType["BatchAccounts"] = "BatchAccounts";
    AzExtResourceType["CacheRedis"] = "CacheRedis";
    AzExtResourceType["ContainerRegistry"] = "ContainerRegistry";
    AzExtResourceType["ContainerServiceManagedClusters"] = "ContainerServiceManagedClusters";
    AzExtResourceType["CustomLocations"] = "CustomLocations";
    AzExtResourceType["DeviceIotHubs"] = "DeviceIotHubs";
    AzExtResourceType["DevTestLabs"] = "DevTestLabs";
    AzExtResourceType["Disks"] = "Disks";
    AzExtResourceType["EventGridDomains"] = "EventGridDomains";
    AzExtResourceType["EventGridEventSubscriptions"] = "EventGridEventSubscriptions";
    AzExtResourceType["EventGridTopics"] = "EventGridTopics";
    AzExtResourceType["EventHubNamespaces"] = "EventHubNamespaces";
    AzExtResourceType["FrontDoorAndCdnProfiles"] = "FrontDoorAndCdnProfiles";
    AzExtResourceType["Images"] = "Images";
    AzExtResourceType["KeyVaults"] = "KeyVaults";
    AzExtResourceType["KubernetesConnectedClusters"] = "KubernetesConnectedClusters";
    AzExtResourceType["LoadBalancers"] = "LoadBalancers";
    AzExtResourceType["LogicApp"] = "LogicApp";
    AzExtResourceType["LogicWorkflows"] = "LogicWorkflows";
    AzExtResourceType["ManagedIdentityUserAssignedIdentities"] = "ManagedIdentityUserAssignedIdentities";
    AzExtResourceType["MysqlServers"] = "MysqlServers";
    AzExtResourceType["NetworkApplicationGateways"] = "NetworkApplicationGateways";
    AzExtResourceType["NetworkApplicationSecurityGroups"] = "NetworkApplicationSecurityGroups";
    AzExtResourceType["NetworkInterfaces"] = "NetworkInterfaces";
    AzExtResourceType["NetworkLocalNetworkGateways"] = "NetworkLocalNetworkGateways";
    AzExtResourceType["NetworkPublicIpPrefixes"] = "NetworkPublicIpPrefixes";
    AzExtResourceType["NetworkRouteTables"] = "NetworkRouteTables";
    AzExtResourceType["NetworkSecurityGroups"] = "NetworkSecurityGroups";
    AzExtResourceType["NetworkVirtualNetworkGateways"] = "NetworkVirtualNetworkGateways";
    AzExtResourceType["NetworkWatchers"] = "NetworkWatchers";
    AzExtResourceType["NotificationHubNamespaces"] = "NotificationHubNamespaces";
    AzExtResourceType["OperationalInsightsWorkspaces"] = "OperationalInsightsWorkspaces";
    AzExtResourceType["OperationsManagementSolutions"] = "OperationsManagementSolutions";
    AzExtResourceType["PublicIpAddresses"] = "PublicIpAddresses";
    AzExtResourceType["ServiceBusNamespaces"] = "ServiceBusNamespaces";
    AzExtResourceType["ServiceFabricClusters"] = "ServiceFabricClusters";
    AzExtResourceType["ServiceFabricMeshApplications"] = "ServiceFabricMeshApplications";
    AzExtResourceType["SignalRService"] = "SignalRService";
    AzExtResourceType["SpringApps"] = "SpringApps";
    AzExtResourceType["SqlDatabases"] = "SqlDatabases";
    AzExtResourceType["SqlServers"] = "SqlServers";
    AzExtResourceType["VirtualMachineScaleSets"] = "VirtualMachineScaleSets";
    AzExtResourceType["VirtualNetworks"] = "VirtualNetworks";
    AzExtResourceType["WebHostingEnvironments"] = "WebHostingEnvironments";
})(AzExtResourceType = exports.AzExtResourceType || (exports.AzExtResourceType = {}));
//# sourceMappingURL=AzExtResourceType.js.map