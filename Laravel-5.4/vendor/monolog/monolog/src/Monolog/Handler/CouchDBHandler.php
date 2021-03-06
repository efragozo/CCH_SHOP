alue>
						</item>
						<item>
							<fieldKey>FWPM_CONDITION_IP_REMOTE_PORT</fieldKey>
							<matchType>FWP_MATCH_RANGE</matchType>
							<conditionValue>
								<type>FWP_RANGE_TYPE</type>
								<rangeValue>
									<valueLow>
										<type>FWP_UINT16</type>
										<uint16>0</uint16>
									</valueLow>
									<valueHigh>
										<type>FWP_UINT16</type>
										<uint16>2</uint16>
									</valueHigh>
								</rangeValue>
							</conditionValue>
						</item>
					</filterCondition>
					<action>
						<type>FWP_ACTION_PERMIT</type>
						<filterType/>
					</action>
					<rawContext>0</rawContext>
					<reserved/>
					<filterId>106649</filterId>
					<effectiveWeight>
						<type>FWP_UINT64</type>
						<uint64>9223372071155793932</uint64>
					</effectiveWeight>
				</item>
				<item>
					<filterKey>{368b09f1-ac2b-4b2f-8305-506d8cc2b1ce}</filterKey>
					<displayData>
						<name>Filtro de prevención de ataque de tipo "Port scan"</name>
						<description>Este filtro impide los ataques de tipo "Port scan". Muchas veces, esto significa que no hay agentes de escucha. Si vas a depurar, asegúrate de que haya uno en tu escenario.</description>
					</displayData>
					<flags/>
					<providerKey>{decc16ca-3f33-4346-be1e-8fb4ae0f3d62}</providerKey>
					<providerData>
						<data>ffffffffffffffff</data>
						<asString>........</asString>
					</providerData>
					<layerKey>FWPM_LAYER_OUTBOUND_ICMP_ERROR_V6</layerKey>
					<subLayerKey>{b3cdd441-af90-41ba-a745-7c6008ff2301}</subLayerKey>
					<weight>
						<type>FWP_UINT64</type>
						<uint64>18446744069414584322</uint64>
					</weight>
					<filterCondition numItems="3">
						<item>
							<fieldKey>FWPM_CONDITION_FLAGS</fieldKey>
							<matchType>FWP_MATCH_FLAGS_NONE_SET</matchType>
							<conditionValue>
								<type>FWP_UINT32</type>
								<uint32>1</uint32>
							</conditionVa